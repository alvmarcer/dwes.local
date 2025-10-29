<?php
try {
    require_once 'core/bootstrap.php';
    require Router::load('app/routes.php')->direct(Request::uri(), Request::method());

    // $router = new Router();
    // require 'app/routes.php'; // Obtenemos la tabla de rutas

    // require $routes[Request::uri()];
    // require $router->direct(Request::uri());
} catch (NotFoundException $notFoundException) {
    die($notFoundException->getMessage());
}
// $routes = require 'app/routes.php'; // Obtenemos la tabla de rutas

/*
$uri = trim($_SERVER['REQUEST_URI'], '/'); // Obtenemos la uri del usuario
require $routes[$uri];
*/

/*
header("Location: templates/index.php");
exit();
*/
