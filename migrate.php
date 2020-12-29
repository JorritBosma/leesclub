<?php

// require $_SERVER['DOCUMENT_ROOT'] . '/' . 'Core/bootstrap.php';
// These three uses are not neceserry if you require bootstrap.
// use Core\App;
// use Core\Database\QueryBuilder;
// use Core\Database\Connection;
use Core\Database\MigrateDatabase;

require 'vendor/autoload.php';
require 'Core/bootstrap.php';

// You can either require bootstrap OR copy the DI-containers which make a connection.
// For readability purposes I commented the bootstrap code below so you can see it does the same as the dotenv.
// Toby uses dotenv package, we bind the config to DI-container like in bootstrap.
// 
// Toby-code:
// $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// Wouter-code included by requireing bootstrap.php: 
// App::bind('config', require 'config.php');

// App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

MigrateDatabase::migrate(array_search('-f', $argv) !== false, array_search('-s', $argv) !== false);
