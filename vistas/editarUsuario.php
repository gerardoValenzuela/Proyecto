<div id="editarUsuario" class="row" ng-show="vistas.editarUsuario"  style = "background-color: transparent;color:#000000;">
    <div>
        <form action="servicios/actualizarUsuario.php" method = "get">
            <div class="form-group" style = "text-align:left;">
                <label for="id" style = "font-weight:bolder;">id:</label>
                <input type="text" class="form-control" id="id" name = "id" ng-model = "usuarioEnEdicion.id" READONLY>
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="user" style = "font-weight:bolder;">User:</label>
                <input type="text" class="form-control" id="user" name="user" ng-model = "usuarioEnEdicion.user">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="password" style = "font-weight:bolder;">Password:</label>
                <input type="text"  class="form-control" id="password" name="password" cols = "100" rows = "10" ng-model = "usuarioEnEdicion.password" />
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="email" style = "font-weight:bolder;">E-Mail:</label>
                <input type="text" class="form-control" id="email" name="email" cols = "100" rows = "10" ng-model = "usuarioEnEdicion.email" />
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="pasadmin" style = "font-weight:bolder;">Pasadmin:</label>
                <input type="text"  class="form-control" id="pasadmin" name="pasadmin" cols = "100" rows = "10" ng-model = "usuarioEnEdicion.pasadmin" />
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="rol" style = "font-weight:bolder;">Rol:</label>
                <input type="text"  class="form-control" id="rol" name="rol" cols = "100" rows = "10" ng-model = "usuarioEnEdicion.rol" />
            </div>
            <button type="submit" class="btn btn-default">Actualizar</button>
            <button type="button" class="btn btn-default" ng-click = "presentaVista('listadodeUsuarios')">Cancelar</button>

        </form>
    </div>
</div>
