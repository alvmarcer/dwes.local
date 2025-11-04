<?php
    use dwes\app\entity\Asociado;
    use dwes\app\utils\File;
    use dwes\app\exceptions\FileException;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $nombre = trim(htmlspecialchars($_POST['nombre'] ?? ""));
            $descripcion = trim(htmlspecialchars($_POST['descripcion'] ?? ""));
            $tiposAceptados = ['image/jpeg', 'image/gif', 'image/png'];
            $logo = new File('logo', $tiposAceptados);
            
            // Subir imágen
            $logo->saveUploadFile(Asociado::RUTA_LOGOS_ASOCIADOS);
        } catch (FileException $fileException) {
            $errores[] = $fileException->getMessage();
        }
    } else {
        $errores = [];
        $nombre = "";
        $descripcion = "";
    }

    require_once __DIR__ . "/../views/asociados.view.php";