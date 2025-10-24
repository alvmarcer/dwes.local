<?php
require_once "../src/utils/file.class.php";
require_once "../src/entity/Imagen.class.php";
require_once "../src/database/connection.class.php";
require_once "../src/repository/ImagenesRepository.php";

$errores = [];
$titulo = "";
$descripcion = "";
$mensaje = "";

try {
    $config = require_once __DIR__ . '/../app/config.php';
    App::bind('config', $config); // Guardamos la configuración en el contenedor de servicios

    // $queryBuilder = new QueryBuilder('imagenes','Imagen');
    $imagenesRepository = new ImagenesRepository();
    // $imagenes = $queryBuilder->findAll();
    $imagenes = $imagenesRepository->findAll();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = trim(htmlspecialchars($_POST['titulo'] ?? ""));
        $descripcion = trim(htmlspecialchars($_POST['descripcion'] ?? ""));
        $tiposAceptados = ['image/jpeg', 'image/gif', 'image/png'];
        $imagen = new File('imagen', $tiposAceptados); // El nombre 'imagen' es el que se ha puesto en el formulario de galeria.view.php

        // Subir imágen
        
        /*
        $sql = "INSERT INTO imagenes (nombre, descripcion, categoria) VALUES (:nombre,:descripcion,:categoria)";
        $pdoStatement = $conexion->prepare($sql);
        $parametros = [
            ':nombre' => $imagen->getFileName(),
            ':descripcion' => $descripcion,
            ':categoria' => '1'
        ];
        if ($pdoStatement->execute($parametros) === false)
            $errores[] = "No se ha podido guardar la imagen en la base de datos";
        else {
            $descripcion = "";
            $mensaje = "Se ha guardado la imagen correctamente";
        }
        */

        $imagen->saveUploadFile(Imagen::RUTA_IMAGENES_SUBIDAS);

        $imagenGaleria = new Imagen($imagen->getFileName(),$descripcion);
        // $queryBuilder->save($imagenGaleria);
        $imagenesRepository->save($imagenGaleria);
        
        $mensaje = "Se ha guardado la imagen correctamente";
        // $imagenes = $queryBuilder->findAll();
        $imagenes = $imagenesRepository->findAll();
    }
} catch (FileException $fileException) {
    $errores[] = $fileException->getMessage();
} catch (QueryException $queryException) {
    $errores[] = $fileException->getMessage();
} catch (AppException $appException) {
    $errores[] = $appException->getMessage();
}

require_once "./views/galeria.view.php";
