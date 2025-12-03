<?php
    if($imagen->getIdUsuario() != $_SESSION['loguedUser']) {
        header("Location: /");
        exit();
    }
?>

<!-- Principal Content Start -->
<div id="galeria">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>IMAGEN GALERIA</h1>
            <hr>
            <div class="imagenes_galeria">
                <img src="<?= $imagen->getUrlSubidas() ?>" alt="<?= $imagen->getDescripcion() ?>" title="<?=$imagen->getDescripcion() ?>" width="500px">
                <br>Descripción: <?= $imagen->getDescripcion() ?>
                <br>Número de visualizaciones: <?= $imagen->getNumVisualizaciones() ?>
                <br>Número de likes: <?= $imagen->getNumLikes() ?>
                <br>Número de downloads: <?= $imagen->getNumDownloads() ?>
            </div>

            <form clas="form-horizontal" action="/galeria/modificar/<?= $imagen->getId() ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Imagen (no se cambiara si no se sube)</label>
                        <input class="form-control-file" type="file" name="imagen">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $imagen->getNombre() ?> " readonly>
                        <label class="label-control">Descripción</label>
                        <textarea class="form-control" name="descripcion"><?= $imagen->getDescripcion() ?></textarea>
                        <button class="pull-right btn btn-lg sr-button">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
