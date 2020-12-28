<?php

// require $_SERVER['DOCUMENT_ROOT'] . '/' . 'Core/bootstrap.php';
use Core\App;
use Core\Database\QueryBuilder;
use Core\Database\Connection;
use Core\Database\MigrateDatabase;

require 'vendor/autoload.php';
$query = require 'Core/bootstrap.php';

// $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();
App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

MigrateDatabase::migrate(array_search('-f', $argv) !== false, array_search('-s', $argv) !== false);
