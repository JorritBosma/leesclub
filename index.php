<?php

use App\Libraries\{Router, Request};

require './vendor/autoload.php';
require 'Core/bootstrap.php';

$route = Router::load('App/routes.php')->direct(Request::uri(), Request::method());
require $route['uri'];
$class = new $route['class'];
$function = $route['function'];

if (!Request::ajax()) {
    // Load the HTML header
    require 'App/Views/Layouts/head.view.php';

    // Inject code from controller
    echo $class->$function();

    // Close it with the bottom end </body> and </html> tags
    require 'App/Views/Layouts/bottom.view.php';
} else {
    echo $class->$function();
}
