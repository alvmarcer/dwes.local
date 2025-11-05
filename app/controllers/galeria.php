<?php
use dwes\app\entity\Imagen;
use dwes\app\database\Connection;
use dwes\core\App;
use dwes\app\repository\ImagenesRepository;
use dwes\app\exceptions\QueryException;
use dwes\app\exceptions\AppException;

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
    $errores[] = $fileException->getMessage();
} catch (AppException $appException) {
    $errores[] = $appException->getMessage();
}

require_once __DIR__ . "/../views/galeria.view.php";
