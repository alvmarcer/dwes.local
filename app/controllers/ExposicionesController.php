<?php

namespace dwes\app\controllers;

use dwes\app\entity\Exposicion;
use dwes\app\entity\Imagenes_Exposiciones;
use dwes\app\repository\ExposicionRepository;
use dwes\core\Response;
use dwes\core\App;
use dwes\app\repository\ImagenesExposicionesRepository;
use dwes\app\repository\ImagenesRepository;

class ExposicionesController
{
    public function index()
    {
        $exposicionesRepository = App::getRepository(ExposicionRepository::class);
        $exposiciones = $exposicionesRepository->findAll();
        $usuarios = $exposicionesRepository->findAllUsers($exposiciones);
        Response::renderView(
            'exposiciones',
            'layout',
            compact('exposiciones', 'exposicionesRepository', 'usuarios')
        );
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

    public function activar($id)
    {
        $exposicionesRepository = App::getRepository(ExposicionRepository::class);

        $exposicionesRepository->activar($id);

        App::get('router')->redirect('exposiciones');
    }

    public function anadirImagen($id)
    {
        $exposicionesRepository = App::getRepository(ExposicionRepository::class);
        $exposicionesBrutas = $exposicionesRepository->findBy(['activa' => 1]);
        
        $idExposiciones = [];
        $nombreExposiciones = [];
        foreach ($exposicionesBrutas as $exposicion) {
            $idExposiciones[] = $exposicion->getId();
            $nombreExposiciones[] = $exposicion->getNombre();
        }

        Response::renderView(
            'anadirImagen',
            'layout',
            compact('idExposiciones', 'nombreExposiciones', 'id')
        );
    }
    
    public function postImagen()
    {
        $imagenId = $_POST['imagen'] ?? null;
        $exposicionId = $_POST['exposicion'] ?? null;

        $imagenExposicionesRepo = App::getRepository(ImagenesExposicionesRepository::class);

        $imagenExposicion = new Imagenes_Exposiciones($imagenId, $exposicionId);
        $imagenExposicionesRepo->save($imagenExposicion);

        App::get('router')->redirect('exposiciones');
    }

    public function mostrar($id)
    {
        $imagenExposicionesRepo = App::getRepository(ImagenesExposicionesRepository::class);
        $imagenRepo = App::getRepository(ImagenesRepository::class);

        $imagenesExposiciones = $imagenExposicionesRepo->findBy(['idExposicion' => $id]);

        $imagenes = [];
        foreach ($imagenesExposiciones as $imagenExposicion) {
            $idImagen = $imagenExposicion->getIdImagen();
            $imagen = $imagenRepo->find($idImagen);
            if ($imagen) {
                $imagenes[] = $imagen;
            }
        }

        Response::renderView(
            'exposicion',
            'layout',
            compact('imagenes')
        );
    }
}
