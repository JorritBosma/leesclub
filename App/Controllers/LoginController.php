<?php

namespace App\Controllers;

use App\Libraries\View;

class LoginController
{
    public function index()
    {
        // logic to see if user is loggedIn, if so redirect to homepage
        return View::render('login');
    }

    public function login()
    {
        // Logic for logging in, setting session and flashing feedback.
    }

    public function logout()
    {
        session_destroy();

        return View::redirect('home');
    }
}
