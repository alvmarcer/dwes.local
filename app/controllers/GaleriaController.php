<?php

namespace dwes\app\controllers;

use dwes\core\Response;
use dwes\app\exceptions\QueryException;
use dwes\core\App;
use dwes\app\exceptions\AppException;
use dwes\app\repository\ImagenesRepository;
use dwes\app\utils\File;
use dwes\app\exceptions\FileException;
use dwes\app\entity\Imagen;

class GaleriaController
{
    /**
     * @throws QueryException
     */
    public function index()
    {
        $errores = [];
        $titulo = "";
        $descripcion = "";
        $mensaje = "";

        try {
            // $queryBuilder = new QueryBuilder('imagenes','Imagen');
            $imagenesRepository = App::getRepository(ImagenesRepository::class);
            // $imagenes = $queryBuilder->findAll();
            $imagenes = $imagenesRepository->findAll(); // $imagenGaleria = App::getRepository(ImagenGaleriaRepository::class)->findAll();
        } catch (QueryException $queryException) {
            $errores[] = $queryException->getMessage();
        } catch (AppException $appException) {
            $errores[] = $appException->getMessage();
        }

        Response::renderView(
            'galeria',
            'layout',
            compact('errores', 'titulo', 'descripcion', 'mensaje', 'imagenes')
        );
    }

    public function nueva()
    {
        try {
            $imagenesRepository = App::getRepository(ImagenesRepository::class);

            $titulo = trim(htmlspecialchars($_POST['titulo'] ?? ""));
            $descripcion = trim(htmlspecialchars($_POST['descripcion'] ?? ""));
            $tiposAceptados = ['image/jpeg', 'image/gif', 'image/png'];
            $imagen = new File('imagen', $tiposAceptados); // El nombre 'imagen' es el que se ha puesto en el formulario de galeria.view.php

            $imagen->saveUploadFile(Imagen::RUTA_IMAGENES_SUBIDAS);
            $imagenGaleria = new Imagen($imagen->getFileName(), $descripcion);
            $imagenesRepository->save($imagenGaleria);
            App::get('logger')->add("Se ha guardado una imagen: " . $imagenGaleria->getNombre());

            $mensaje = "Se ha guardado la imagen correctamente";
        } catch (FileException $fileException) {
            $errores[] = $fileException->getMessage();
        } catch (QueryException $queryException) {
            $errores[] = $queryException->getMessage();
        } catch (AppException $appException) {
            $errores[] = $appException->getMessage();
        }
        App::get('router')->redirect('galeria');
    }

    public function show($id)
    {
        $imagenesRepository = App::getRepository(ImagenesRepository::class);
        $imagen = $imagenesRepository->find($id);
        Response::renderView(
            'imagen-show',
            'layout',
            compact('imagen', 'imagenesRepository')
        );
    }
}
