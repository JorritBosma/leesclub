<?php
require './vendor/autoload.php';
require 'Core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('App/routes.php')
    ->direct(Request::uri(), Request::method());
