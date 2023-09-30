<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SignupController extends BaseController
{
    public function register() {
        // Load the Form Helper
        helper('form'); // This is how you load the Form Helper in CodeIgniter 4
    
        // Your existing code for rendering the view
        return view('/admin/include/register'); // This assumes you return the view
    }

    // ... Other controller methods ...
}
