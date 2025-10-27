<?php
require_once __DIR__ . '/inicio.part.php';
require_once __DIR__ . '/navegacion.part.php';
?>

<form clas="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post"
    enctype="multipart/form-data">
    <div class="form-group">
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <label class="label-control">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre ?> ">
            <label class="label-control">Descripción</label>
            <textarea class="form-control" name="descripcion"><?= $descripcion ?></textarea>
            
            <div class="col-xs-12">
                <label class="label-control">Logo</label>
                <input class="form-control-file" type="file" name="logo">
            </div>

            <button class="pull-right btn btn-lg sr-button">ENVIAR</button>
        </div>
    </div>
</form>

<?php
require_once __DIR__ . '/fin.part.php';
