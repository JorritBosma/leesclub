<?php

namespace App\Core;

class Request
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

// parse_url heeft meerdere methoden. 
// PHP_URL_PATH geeft je alleen de path, dus niet de query. 
// handig om naar je endpoint te komen.
// Dat wrap je weer in de trim, zodat je de slash er ook nog af kunt schrapen, en klaar is Kees.