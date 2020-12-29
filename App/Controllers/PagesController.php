<?php

namespace App\Controllers;

// Deze controller is voor de statische pagina's, zowel de publieke als die waarvoor je moet zijn ingelogd.
class PagesController
{
    public function landing()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function home()
    {
        return view('home');
    }

    public function faq()
    {
        return view('faq');
    }
}
