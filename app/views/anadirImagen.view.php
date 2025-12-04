<div id="anadirImagen">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>Añadir imagen a...</h1>

            <!-- Formulario que envía el id de la imagen y la exposición por POST -->
            <form action="/exposiciones/postImagen" method="POST">
                <input type="hidden" name="imagen" value="<?= $id ?>">

                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="exposicion">Selecciona la exposición</label>
                        <select name="exposicion" id="exposicion" class="form-control">
                            <?php foreach ($idExposiciones as $i => $idExposicion) { ?>
                                <option value="<?= $idExposicion ?>"><?= $nombreExposiciones[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="submit" class="pull-right btn btn-lg sr-button" value="ENVIAR">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
