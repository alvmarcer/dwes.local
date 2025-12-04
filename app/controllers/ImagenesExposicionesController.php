<?php

namespace dwes\app\controllers;

use dwes\app\entity\Imagenes_Exposiciones;
use dwes\app\repository\ImagenesExposicionesRepository;
use dwes\core\App;

class ImagenesExposicionesController
{
    public function postImagen()
    {
        $imagenId = $_POST['imagen'] ?? null;
        $exposicionId = $_POST['exposicion'] ?? null;

        $imagenExposicionesRepo = App::getRepository(ImagenesExposicionesRepository::class);

        $imagenExposicion = new Imagenes_Exposiciones($imagenId, $exposicionId);
        $imagenExposicionesRepo->save($imagenExposicion);

        App::get('router')->redirect('exposiciones');
    }
}
