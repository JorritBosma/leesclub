<?php

namespace App\Controllers;

use Core\App;

class UserController
{
    public function index()
    {
        return view('users');
    }

    public function show()
    {
        return view('toi');
    }
}
