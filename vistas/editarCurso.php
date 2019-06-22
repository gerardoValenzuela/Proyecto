<div id="editarCurso" class="row" ng-show="vistas.editarCurso"  style = "background-color: transparent;color:#000000;">
    <span>
        <form action="/action_page.php">
            <div class="form-group" style = "text-align:left;">
                <label for="nombre">Nombre:</label>
                <label for="nombre"></label>
                <input type="hidden" class="form-control" id="id" ng-model = "cursoEnEdicion.id">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" ng-model = "cursoEnEdicion.nombre">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripcion" cols = "100" rows = "10" ng-model = "cursoEnEdicion.descripcion"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Registrar</button>
        </form>
    </span>
</div>
