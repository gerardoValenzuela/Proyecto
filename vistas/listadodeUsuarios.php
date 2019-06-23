<div id="listadodeUsuarios" class="row" ng-show="vistas.listadodeUsuarios"  style = "background-color: transparent;color:#000000;">
  <div class = row>
    <div class = "span6">
      <h3>Usuarios registrados</h3>
    </div>
  </div>
  <div class = row>
      <table class = "table table-bordered table-hover" cell-spacing = "1" cell-padding = "1" style = "font-weight:bolder; width:98%; border:1;border-style:solid;">
        <thead class = "thead-dark">
            <tr style = "background-color:#222244;color:#ffffff;">
                <td style = "">Id</td>
                <td style = "">Usuario</td>
                <td style = "">Password</td>
                <td style = "">EMail</td>
                <td style = "">Pasadmin</td>
                <td style = "">Rol</td>
                <td style = "">Acciones</td>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="usuario in usuarios" style = "">
                <td style = "">{{usuario.id}}</td>
                <td style = "">{{usuario.user}}</td>
                <td style = "">{{usuario.password}}</td>
                <td style = "">{{usuario.email}}</td>
                <td style = "">{{usuario.pasadmin}}</td>
                <td style = "">{{usuario.rol}}</td>
                <td style = "text-align:center;">
                    <button type="button" class="btn btn-info" ng-click = "presentaVista3('editarUsuario')" idUsuario  = "{{usuario.id}}"><i class="fa fa-fw fa-edit"></i>Editar Usuario</button>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>