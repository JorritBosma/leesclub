<?php

namespace App\Controllers;

use App\Libraries\View;

class UserController
{
    public function index()
    {
        return View::render('users');
    }

    public function show()
    {
        return View::render('toi');
    }
}
