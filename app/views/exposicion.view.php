<div id="exposicion">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <div class="columns">
                <?php foreach ($imagenes as $imagen) { ?>
                <div class="col-2">
                  <img src="/public/images/subidas/<?= $imagen->getNombre(); ?>" class="img-fluid" style="height:150px; object-fit:cover;">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
