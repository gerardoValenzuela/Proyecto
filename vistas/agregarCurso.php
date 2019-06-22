<div id="agregarCurso"  ng-show="vistas.agregarCurso" class="row"  style = "background-color: transparent;color:#000000;">
    <span>
        <form ng-submit="registrarCurso()">
            <div class="form-group" style = "text-align:left;">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" ng-model = "nombreCursoNuevo" />
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="descripcion">Descripcion:</label>
                <textarea class="form-control" name="descripcion"  id="descripcion" cols = "100" rows = "10" ng-model = "descripcionCursoNuevo"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Registrar</button>
        </form>
    </span>
   
</div>
