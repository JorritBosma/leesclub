<?php

namespace App\Controllers;

use Core\App;

class RegisterController
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        // quitte a long chunk of code to check if username exists, if passwords are equal, hash password, store, set session, flash feedback.
    }
}
