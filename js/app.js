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
app.controller('myCtrl', function($scope, $http) {
  $scope.count = 0;
  $scope.variable = "variable";
  $scope.descripcionCursoNuevo = "";
  $scope.nombreCursoNuevo = "";
  $scope.cursoEnEdicion = null;
  
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
  $scope.cursos = new Array();
    
  
  /*$http.get('http://localhost/proyecto/servicios/listadodeCursos.php').
  success(function(data) {
      alert("data");
      $scope.cursos = data;
  });*/

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
        $scope.vistas = vistas1;
    } 
    $scope.presentaVista1 = function(vista, id) {
        idCurso = parseInt(event.target.getAttribute("idCurso"));
        
        for(var i = 0; i < $scope.cursos.length; i++){
            if($scope.cursos[i].id == idCurso){
                $scope.cursoEnEdicion = $scope.cursos[i];
                break;
            }
        }
        
        alert("$cursoEnEdicion: " + $scope.cursoEnEdicion);
        
        
        vistas1 = new Object();
        for(var i in vistas){
    
            
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
    }
    $scope.actualizaCursos = function(){ 
        if($scope.cursos.length == 0){
            $http.get("servicios/listadodeCursos.php")
                .then(function (response) {
                //alert("respuesta: " + response.data);
                $scope.cursos = eval(response.data);
                //alert("cursos: " + $scope.cursos.length);
            });
        }
    }
    $scope.registrarCurso = function(){ 
        url = "servicios/registraCurso.php?nombre=" + encodeURI($scope.nombreCursoNuevo)  + "&descripcion=" + encodeURI($scope.descripcionCursoNuevo);
        alert("url:" + url);
        $http.get(url)
            .then(function (response) {
            alert("respuesta: " + response.data);
            //$scope.cursos = eval(response.data);
            //alert("cursos: " + $scope.cursos.length);
        });
    }
    $scope.actualizaCursos();
  }
});
function enviarFormulario(){
    alert("por enviar formulario");
}
