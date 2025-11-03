<?php
require_once __DIR__ . "/../../src/utils/file.class.php";
require_once __DIR__ . "/../../src/entity/Imagen.class.php";
require_once __DIR__ . "/../../src/database/connection.class.php";
require_once __DIR__ . "/../../src/repository/ImagenesRepository.php";

try {
    $imagenesRepository = new ImagenesRepository();

    $titulo = trim(htmlspecialchars($_POST['titulo'] ?? ""));
    $descripcion = trim(htmlspecialchars($_POST['descripcion'] ?? ""));
    $tiposAceptados = ['image/jpeg', 'image/gif', 'image/png'];
    $imagen = new File('imagen', $tiposAceptados); // El nombre 'imagen' es el que se ha puesto en el formulario de galeria.view.php
    
    $imagen->saveUploadFile(Imagen::RUTA_IMAGENES_SUBIDAS);
    $imagenGaleria = new Imagen($imagen->getFileName(), $descripcion, $categoria);
    $imagenesRepository->save($imagenGaleria);
    App::get('logger')->add("Se ha guardado una imagen: ".$imagenGaleria->getNombre());

    $mensaje = "Se ha guardado la imagen correctamente";
} catch (FileException $fileException) {
    $errores[] = $fileException->getMessage();
} catch (QueryException $queryException) {
    $errores[] = $fileException->getMessage();
} catch (AppException $appException) {
    $errores[] = $appException->getMessage();
}
App::get('router')->redirect('galeria');
