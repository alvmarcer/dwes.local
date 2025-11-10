<?php

namespace dwes\app\controllers;

use dwes\core\Response;
use dwes\app\exceptions\QueryException;
use dwes\core\App;
use dwes\app\exceptions\AppException;
use dwes\app\repository\AsociadosRepository;
use dwes\app\utils\File;
use dwes\app\exceptions\FileException;
use dwes\app\entity\Imagen;
use dwes\app\entity\Asociado;

class AsociadosController
{
    /**
     * @throws QueryException
     */
    public function index()
    {
        $errores = [];
        $nombre = "";
        $descripcion = "";

        Response::renderView(
            'asociados',
            'layout',
            compact('errores', 'nombre', 'descripcion')
        );
    }

    public function nuevo()
    {
        try {
            $imagenesRepository = App::getRepository(AsociadosRepository::class);

            $nombre = trim(htmlspecialchars($_POST['nombre'] ?? ""));
            $descripcion = trim(htmlspecialchars($_POST['descripcion'] ?? ""));
            $tiposAceptados = ['image/jpeg', 'image/gif', 'image/png'];
            $logo = new File('logo', $tiposAceptados);
            
            $logo->saveUploadFile(Asociado::RUTA_LOGOS_ASOCIADOS);
            $logoGaleria = new Asociado($nombre, $logo->getFileName(), $descripcion);
            $imagenesRepository->save($logoGaleria);
        } catch (FileException $fileException) {
            $errores[] = $fileException->getMessage();
        } catch (QueryException $queryException) {
            $errores[] = $queryException->getMessage();
        } catch (AppException $appException) {
            $errores[] = $appException->getMessage();
        }
        
        App::get('router')->redirect('asociados');
    }
}
