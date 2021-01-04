<?php

namespace App\Controllers;

use App\Libraries\View;

class ProfileController
{
    public function index()
    {
        return View::render('moi');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
