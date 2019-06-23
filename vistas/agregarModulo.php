<div id="agregarModulo" class="row" ng-show="vistas.agregarModulo"  style = "background-color: transparent;color:#000000;">
    <div><h3>Nuevo modulo.</h3></div>
    <hr>
    <span>
        <form enctype="multipart/form-data" action="servicios/registraModulo.php" method = "post">
            <div class="form-group" style = "text-align:left;">
                <label for="idCurso" style = "font-weight:bolder;">idCurso:</label>
                <input type="text" class="form-control" id="idCurso" name = "idCurso" ng-model = "cursoEnEdicion.id" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="idCurso" style = "font-weight:bolder;">Curso:</label>
                <input type="text" class="form-control" id="nombreCurso" name = "nombreCurso" ng-model = "cursoEnEdicion.nombre" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="idCurso" style = "font-weight:bolder;">Consecutivo:</label>
                <input type="text" class="form-control" id="consecutivo" name = "consecutivo">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Nombre del Modulo nuevo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="descripcion" style = "font-weight:bolder;">Descripcion del modulo:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" cols = "100" rows = "10"></textarea>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Pdf:</label>
                <input type="file" class="form-control" id="pdf" name="pdf">
            </div>
            <button type="submit" class="btn btn-default">Registrar</button>
            <button type="button" class="btn btn-default" ng-click = "presentaVista1('listadodeCursos')">Cancelar</button>
        </form>
    </span>
</div>
