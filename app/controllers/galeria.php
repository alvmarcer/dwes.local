<?php
require_once __DIR__ . "/../../src/utils/file.class.php";
require_once __DIR__ . "/../../src/entity/Imagen.class.php";
require_once __DIR__ . "/../../src/database/connection.class.php";
require_once __DIR__ . "/../../src/repository/ImagenesRepository.php";

$errores = [];
$titulo = "";
$descripcion = "";
$mensaje = "";

try {
    // $queryBuilder = new QueryBuilder('imagenes','Imagen');
    $imagenesRepository = new ImagenesRepository();
    // $imagenes = $queryBuilder->findAll();
    $imagenes = $imagenesRepository->findAll();
} catch (QueryException $queryException) {
    $errores[] = $fileException->getMessage();
} catch (AppException $appException) {
    $errores[] = $appException->getMessage();
}

require_once __DIR__ . "/../views/galeria.view.php";
