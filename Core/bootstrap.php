<?php

require 'vendor/autoload.php';

session_start();

$dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

require 'App/Helpers/Helper.php';

$msg = new \Plasticbrain\FlashMessages\FlashMessages();

$msg->display();
