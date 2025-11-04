<?php
    namespace dwes\core;

    use dwes\app\utils\MyLog;
    use dwes\core\Request;
    use dwes\core\App;
    use dwes\core\Router;
    use dwes\app\exceptions\NotFoundException;

    require_once __DIR__ . '/../vendor/autoload.php';

    $config = require_once __DIR__ . '/../app/config.php';
    App::bind('config',$config); // Guardamos la configuración en el contenedor de servicios

    $router = Router::load('app/routes.php');
    App::bind('router',$router);

    $logger = MyLog::load('logs/curso.log');
    App::bind('logger',$logger);