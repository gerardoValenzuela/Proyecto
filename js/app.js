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
  params =  window.obtenParametros();
  
  $scope.count = 0;
  $scope.variable = "variable";
  $scope.descripcionCursoNuevo = "";
  $scope.nombreCursoNuevo = "";
  $scope.cursoEnEdicion = null;
  $scope.moduloEnEdicion = null;
  $scope.usuarioEnEdicion = null;
  
  vistas = new Object();
  vistas.usuarios = false;
  vistas.cursos = false;
  vistas.inicio = false;
  vistas.listadodeCursos = false;
  vistas.agregarCurso = false;
  vistas.editarCurso = false;
  vistas.eliminarCurso = false;
  vistas.agregarModulo = false;
  vistas.editarModulo = false;
  vistas.eliminarModulo = false;
  vistas.listadodeUsuarios = false;
  vistas.editarUsuario = false;
  if(params.v){
    vistas[params.v] = true;
  }else{
    vistas.inicio = true;
  }
  $scope.vistas = vistas;
  $scope.cursos = new Array();
  $scope.usuarios = new Array();
    


  
  
  
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
    }
    $scope.presentaVista1 = function(vista, id) {
        idCurso = parseInt(event.target.getAttribute("idCurso"));
        
        for(var i = 0; i < $scope.cursos.length; i++){
            if($scope.cursos[i].id == idCurso){
                $scope.cursoEnEdicion = $scope.cursos[i];
                break;
            }
        }
        
        
        
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
    $scope.presentaVista2 = function(vista, id) {
        idCurso = parseInt(event.target.getAttribute("idCurso"));
        idModulo = parseInt(event.target.getAttribute("idModulo"));
        
        for(var i = 0; i < $scope.cursos.length; i++){
            if($scope.cursos[i].id == idCurso){
                $scope.cursoEnEdicion = $scope.cursos[i];
                for(var j = 0; j < $scope.cursos[i].modulos.length; j++){
                    if($scope.cursos[i].modulos[j].id == idModulo){
                        $scope.moduloEnEdicion = $scope.cursos[i].modulos[j];
                
                    }
                }
                break;
            }
        }
        
        
        
        
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
    $scope.presentaVista3 = function(vista, id) {
        idUsuario = parseInt(event.target.getAttribute("idUsuario"));
        
        for(var i = 0; i < $scope.usuarios.length; i++){
            if($scope.usuarios[i].id == idUsuario){
                $scope.usuarioEnEdicion = $scope.usuarios[i];
                break;
            }
        }
        
        
        
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
    $scope.actualizaUsuarios = function(){ 
        if($scope.cursos.length == 0){
            $http.get("servicios/listadodeUsuarios.php")
                .then(function (response) {
                //alert("respuesta: " + response.data);
                $scope.usuarios = eval(response.data);
                //alert("usuarios: " + $scope.usuarios.length);
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
    $scope.actualizaUsuarios();
    
});
function obtenParametros(){
    var params = new Object();
    var location = "" + window.location;
    var inicioParameters = location.indexOf("?");
    var cadenaParametros = "";

    var pars = new Array();
    if(inicioParameters > 0){
        cadenaParametros = location.substring(inicioParameters + 1);
        pars = cadenaParametros.split("&");
        for(var i = 0; i < pars.length; i++){
            var posIgual = pars[i].indexOf("=");
            if(posIgual > 0){
                params[pars[i].substring(0, posIgual)] = pars[i].substring(posIgual + 1);
            }
        }
        
       
    }
    return params;
}
function enviarFormulario(){
    alert("por enviar formulario");
}
