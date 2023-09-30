<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function register()
    {
        return view('register');
    }

    public function registration()
    {
        helper(['form']);

        // Validation rules
        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|is_unique[authenticate.username]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[authenticate.email]',
            'password' => 'required|min_length[4]|max_length[50]|matches[confirmpassword]',
        ];

        if ($this->validate($rules)) {
            $data = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $this->userModel->insert($data);

            return redirect()->to('login');
        } else {
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }

    public function login()
    {
        helper(['form']);
        return view('login');
    }

    public function loginAuth()
    {
        $session = session();
        $usernameOrEmail = $this->request->getVar('usernameOrEmail');
        $password = $this->request->getVar('password');

        $data = $this->userModel
            ->where('username', $usernameOrEmail)
            ->orWhere('email', $usernameOrEmail)
            ->first();

        if ($data && password_verify($password, $data['password'])) {
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'role' => $data['role'],
                'isLoggedIn' => true,
            ];

            $session->set($ses_data);

            $redirectRoute = ($data['role'] === 'admin') ? 'admins' : '';
            return redirect()->to(base_url($redirectRoute));
        } else {
            $session->setFlashdata('msg', 'Email or Password is incorrect.');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
