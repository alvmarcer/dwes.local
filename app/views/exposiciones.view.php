<div id="exposiciones">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fin</th>
                        <th scope="col">Activa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($exposiciones as $i => $exposicion) { ?>
                        <tr>
                            <th scope="row"><?= $exposicion->getNombre() ?></th>
                            <td><?= $exposicion->getDescripcion() ?></td>
                            <td><?= $usuarios[$i] ?></td>
                            <td><?= $exposicion->getFechaInicio() ?></td>
                            <td><?= $exposicion->getFechaFin() ?></td>

                            <td>
                                <?php if ($exposicion->getActiva()) {
                                        if ($exposicion->getIdUsuario() == $_SESSION['loguedUser']) { ?>
                                            <form action="/exposiciones/activar/<?= $exposicion->getId(); ?>" method="POST">
                                                <button type="submit" class="btn btn-primary pull-right sr-button">Activar</button>
                                            </form>
                                        <?php } else { ?>
                                            <p class="text-right text-success">Sí</p>
                                        <?php } ?>
                                <?php } else {
                                        if ($exposicion->getIdUsuario() == $_SESSION['loguedUser']) { ?>
                                            <form action="/exposiciones/activar/<?= $exposicion->getId(); ?>" method="POST">
                                                <button type="submit" class="btn btn-danger pull-right sr-button">Desactivar</button>
                                            </form>
                                        <?php } else { ?>
                                            <p class="text-right text-danger">No</p>
                                        <?php } ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
