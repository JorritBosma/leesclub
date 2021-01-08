<?php


$router->get('', 'App/Controllers/PagesController.php@landing');
$router->get('about', 'App/Controllers/PagesController.php@about');
$router->get('home', 'App/Controllers/PagesController.php@home');
$router->get('faq', 'App/Controllers/PagesController.php@faq');


$router->get('moi', 'App/Controllers/ProfileController.php@index');
$router->post('moi', 'App/Controllers/ProfileController.php@update');

$router->get('users', 'App/Controllers/UserController.php@index');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');

$router->get('login', 'App/Controllers/LoginController.php@index');
$router->post('login', 'App/Controllers/LoginController.php@login');
$router->get('logout', 'App/Controllers/LoginController.php@logout');

$router->get('books', 'App/Controllers/BooksController.php@index');
$router->post('books', 'App/Controllers/BooksController.php@store');
$router->get('books-add', 'App/Controllers/BooksController.php@add');

$router->get('wishlist', 'App/Controllers/BooksController.php@wishlist');
