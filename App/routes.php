<?php


$router->get('', 'PagesController@landing');
$router->get('about', 'PagesController@about');
$router->get('home', 'PagesController@home');
$router->get('faq', 'PagesController@faq');


$router->get('moi', 'ProfileController@index');
$router->post('moi', 'ProfileController@update');

$router->get('users', 'UserController@index');

$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@store');

$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');
$router->get('logout', 'LoginController@logout');

$router->get('books', 'BooksController@index');
$router->post('books', 'BooksController@store');
$router->get('books-add', 'BooksController@add');

$router->get('wishlist', 'WishlistController@index');
