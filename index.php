<?php
use dwes\core\App;
use dwes\core\Router;
use dwes\core\Request;
use dwes\app\exceptions\NotFoundException;
use dwes\app\exceptions\AppException;

try {
    require_once 'core/bootstrap.php';

    // require Router::load('app/routes.php')->direct(Request::uri(), Request::method());
    // require App::get('router')->direct(Request::uri(), Request::method());
    App::get('router')->direct(Request::uri(), Request::method());

    // $router = new Router();
    // require 'app/routes.php'; // Obtenemos la tabla de rutas

    // require $routes[Request::uri()];
    // require $router->direct(Request::uri());
} catch ( AppException $appException ) {
    $appException->handleError();
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
