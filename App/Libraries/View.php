<?php

namespace App\Libraries;

class View
{
    public static function render($view, array $vars = null)
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/App/Views/' . $view . '.view' . '.php';
    }

    public static function redirect($uri)
    {
        header("Location: " . $uri);
    }
}
