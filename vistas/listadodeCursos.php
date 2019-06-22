<div id="listadodeCursos" class="row" ng-show="vistas.listadodeCursos"  style = "background-color: transparent;color:#000000;">
  <div>
    <div class = "span6">
      <h3>Cursos disponibles</h3>
    </div>
    <div class = "span6" style = "text-align:right;">
      <h3><button type="button" class="btn btn-info" data-target="#agregarCurso" ng-click = "presentaVista('agregarCurso')"><i class="fa fa-fw fa-plus"></i>Agregar Curso</button></h3>
    </div>
  </div>
  
  <div class = "card" ng-repeat="curso in cursos" style = "background-color:transparent;">
    <table datatable="ng" dt-options="vm.dtOptions" cell-spacing = "0px" cell-padding = "0px" class=" table table-striped" style = "background-color:#dddddd; font-weight:bolder; border:2; border-style:solid;">
      <tbody>
        <tr>
          <td style = "background-color:#888888; color:#ffffff; font-weight:bolder;">{{curso.nombre}}</td>
          <td style = "background-color:#888888; color:#ffffff; font-weight:bolder; text-align:right;">
            <div class="btn-group">
              <button type="button" class="btn btn-info" ng-click = "presentaVista1('editarCurso')" idCurso = "{{curso.id}}"><i class="fa fa-fw fa-edit"></i>Editar</button>
              <button type="button" class="btn btn-warning" ng-click = "presentaVista('editarCurso')"><i class="fa fa-fw fa-remove"></i>Eliminar</button>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan = "2">{{curso.descripcion}}</td>
        </tr>
        <tr>
          <td colspan = "2" style = "text-align:center;">
            <table style = "width:98%">
              <tr>
                <td>
                  Modulos:
                </td>
                <td style = "text-align:right">
                  <button type="button" class="btn btn-info" ng-click = "presentaVista('agregarModulo')"><i class="fa fa-fw fa-plus"></i>Agregar Modulo</button>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan = "2" style = "text-align:center; background-color:888888;">
            <table width = "98%" style = "border:1px;" class="table table-bordered table-striped">
              <tr>
                <td>Nombre</td>
              </tr>
              <tr>
                <td>Descripción</td>
              </tr>
              <tr>
                <td>PDF</td>
              </tr>
              <tr>
                <td style = "text-align:center;">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info" ng-click = "presentaVista('editarModulo')"><i class="fa fa-fw fa-edit"></i>Editar Modulo</button>
                    <button type="button" class="btn btn-warning" ng-click = "presentaVista('eliminarModulo')"><i class="fa fa-fw fa-remove"></i>Eliminar Modulo</button>
                  </div>
                </td>
              </tr>
            </table>
           
            
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>