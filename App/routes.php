<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');

$router->get('moi', 'ProfileController@index');

$router->get('books', 'BooksController@index');
$router->post('books', 'BooksController@store');
