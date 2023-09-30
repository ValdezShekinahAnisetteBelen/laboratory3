<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel; // Import the UserModel

class UserController extends BaseController
{
    public function login()
    {
        helper(['form']);
        echo view('admin/include/login');
    }

    public function register()
    {
        helper(['form']);

        // Create an instance of the UserModel
        $userModel = new UserModel();

        // Initialize the data array to hold any view data
        $data = [];

        // Check if the form has been submitted
        if ($this->request->getMethod() === 'post') {
            // Define validation rules
            $rules = [
                'username' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.username]', // Changed 'users.email' to 'users.username'
                'password' => 'required|min_length[4]|max_length[50]',
                'confirmpassword' => 'matches[password]'
            ];

            // Validate the user input against the rules
            if ($this->validate($rules)) {
                // Prepare the data to be inserted into the database
                $data = [
                    'username' => $this->request->getVar('username'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];

                // Save the user data to the database
                $userModel->insert($data);

                // Redirect to the login page
                return redirect()->to('/admin/include/login');
            } else {
                // Validation failed, store validation errors in the data array
                $data['validation'] = $this->validator;
            }
        }

        // Load the signup view with data (validation errors, if any)
        echo view('register', $data);
    }

    public function loginAuth()
{
    $session = session();
    $userModel = new UserModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    $data = $userModel->where('username', $username)->first();

    if ($data) {
        $storedPassword = $data['password'];
        $authenticatePassword = password_verify($password, $storedPassword);

        if ($authenticatePassword) {
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'isLoggedIn' => true
            ];

            $session->set($ses_data);

            return redirect()->to('/profile');
        } else {
            $session->setFlashdata('msg', 'Password is incorrect.');
            return redirect()->to('/admin/include/login'); // Changed to '/login'
        }
    } else {
        $session->setFlashdata('msg', 'Username does not exist.');
        return redirect()->to('/admin/include/login'); // Changed to '/login'
    }
}

}
