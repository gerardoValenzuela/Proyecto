$( document ).ready(function() {
    console.log( "ready!" );
});
function activaTab(tab){
    alert("en activaTap");
    elemento = $('.vistas');
    /*for(i in elemento){alert("" + i + ": " + elemento[i])};
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');*/
}
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
  $scope.count = 0;
  vistas = new Object();
  vistas.usuarios = false;
  vistas.cursos = false;
  vistas.inicio = true;
  vistas.listadodeCursos = false;
  vistas.agregarCurso = false;
  vistas.editarCurso = false;
  vistas.eliminarCurso = false;
  vistas.agregarModulo = false;
  vistas.editarModulo = false;
  vistas.eliminarModulo = false;
  $scope.vistas = vistas;
  function Curso(id, nombre, descripcion){
    this.id = id;
    this.nombre = nombre;
    this.descripcion = descripcion;
    this.modulos = new Array();
  }	

  $scope.myFunction = function() {
      alert("desde mi funcion");
    $scope.count++;
  }
  $scope.presentaVista = function(vista) {
    vistas1 = new Object();
    for(i in vistas){

        
        vistas1[i] = vistas[i];
        if(vistas1[i]){
            if(i == vista){
                vistas1[i] = true;
            }else{
                vistas1[i] = false;
            }
        }
        else{
            if(i == vista){
                vistas1[i] = true;
            }
        }
    }  
    $scope.vistas = vistas1;
    cursos = new Array();
    cursos.push(new Curso(1, "Curso 1", "Curso 1"));
    cursos.push(new Curso(2, "Curso 2", "Curso 2"));
    $scope.cursos = cursos;
  }
});
