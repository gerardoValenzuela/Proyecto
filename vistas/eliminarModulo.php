<div id="eliminarModulo" class="row" ng-show="vistas.eliminarModulo"  style = "background-color: transparent;color:#000000;">
    <div><h3>Eliminando modulo.</h3></div>
    <hr>
    <span>
        <form action="servicios/eliminarModulo.php" method = "post">
            <div class="form-group" style = "text-align:left;">
                <label for="idCurso" style = "font-weight:bolder;">idCurso:</label>
                <input type="text" class="form-control" id="idCurso" name = "idCurso" ng-model = "cursoEnEdicion.id" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="idCurso" style = "font-weight:bolder;">Curso:</label>
                <input type="text" class="form-control" id="nombreCurso" name = "nombreCurso" ng-model = "cursoEnEdicion.nombre" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Id del Modulo:</label>
                <input type="text" class="form-control" id="idModulo" name="idModulo" ng-model = "moduloEnEdicion.id" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">N&oacute;mero}:</label>
                <input type="text" class="form-control" id="consecutivo" name="consecutivo" ng-model = "moduloEnEdicion.consecutivo" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Nombre del Modulo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" ng-model = "moduloEnEdicion.nombre" readonly>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="descripcion" style = "font-weight:bolder;">Descripcion del modulo:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" cols = "100" rows = "10" ng-model = "moduloEnEdicion.descripcion" readonly></textarea>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Pdf:</label>
                <input type="text" class="form-control" id="pdf" name="pdf" ng-model = "moduloEnEdicion.pdf" readonly>
            </div>
            <button type="submit" class="btn btn-default">Confirmar eliminar</button>
            <button type="button" class="btn btn-default" ng-click = "presentaVista('listadodeCursos')">Cancelar</button>
        </form>
    </span>
</div>
