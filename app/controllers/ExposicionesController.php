<?php

namespace dwes\app\controllers;

use dwes\app\entity\Exposicion;
use dwes\app\repository\ExposicionRepository;
use dwes\core\Response;
use dwes\core\App;

class ExposicionesController
{
    public function index()
    {
        // crear...
    }

    public function crear()
    {
        Response::renderView(
            'crear_exposiciones',
            'layout'
        );
    }

    public function nueva()
    {
        $exposicionesRepository = App::getRepository(ExposicionRepository::class);

        $nombre = trim(htmlspecialchars($_POST['titulo'] ?? ""));
        $descripcion = trim(htmlspecialchars($_POST['descripcion'] ?? ""));
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];

        $nuevaExposicion = new Exposicion($nombre, $descripcion, $fechaInicio, $fechaFin, true, $_SESSION['loguedUser']);
        $exposicionesRepository->save($nuevaExposicion);
        App::get('router')->redirect('exposiciones');
    }
}
