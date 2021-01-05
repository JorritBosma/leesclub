<?php

namespace App\Controllers;

use App\Libraries\View;
// Deze controller is voor de statische pagina's, zowel de publieke als die waarvoor je moet zijn ingelogd.
class PagesController
{
    public function landing()
    {
        return View::render('index');
    }

    public function about()
    {
        return View::render('about');
    }

    public function home()
    {
        return View::render('home');
    }

    public function faq()
    {
        return View::render('faq');
    }
}
