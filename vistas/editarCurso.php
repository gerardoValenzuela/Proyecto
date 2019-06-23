<div id="editarCurso" class="row" ng-show="vistas.editarCurso"  style = "background-color: transparent;color:#000000;">
    <span>
        <form action="servicios/actualizarCurso.php" method = "get">
            <div class="form-group" style = "text-align:left;">
                <label for="id" style = "font-weight:bolder;">id:</label>
                <input type="text" class="form-control" id="id" name = "id" ng-model = "cursoEnEdicion.id" READONLY>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" ng-model = "cursoEnEdicion.nombre">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="descripcion" style = "font-weight:bolder;">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" cols = "100" rows = "10" ng-model = "cursoEnEdicion.descripcion"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Actualizar</button>
        </form>
    </span>
</div>
