<div id="crear-exposiciones">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <form class="form-horizontal" action="/exposiciones/nueva" method="post">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo">

                        <label class="label-control">Descripción</label>
                        <textarea class="form-control" name="descripcion"></textarea>

                        <label class="label-control">Fecha de inicio</label>
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">

                        <label class="label-control">Fecha de fin</label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin">

                        <button type="submit" class="pull-right btn btn-lg sr-button">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
