<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	echo "Marca 1";
    //header("Location:index.php");
} elseif ($_SESSION['rol'] == 2) {
    echo "Marca 2";
    
	//header("Location:index2.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}

		
		.sinBorde{
			border-width:0px !important;
		}
		nav-tabs .active a{
			border-width:0px !important;
		}
		.navbar-inverse .nav .active>a{
			background-color:#44b !important;
			webkit-border-radius: 0px 0px 0 0 !important;
			-moz-border-radius: 0px 0px 0 0 !important;
			border-radius: 0px 0px 0 0 !important;
		}
		/* Tabs*/
	</style>
  </head>

<body data-offset="40" background="images/arco.jpg" style="background-position: center top; ">
<div class="container">
		

<header class="header">
<div class="row">
<h2 class="span">Administración</h2>
</div>
</header>

<div class="row" style = "background-color: transparent;">
    <div class="navbar navbar-inverse"">
	  <div class="navbar-inner">
			
			<ul class="nav nav-tabs sinBorde">
				<li class="active"><a data-toggle="tab" class = "sinBorde" href="#inicio"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
				<li><a data-toggle="tab" class = "sinBorde" href="#usuarios"><i class="fa fa-fw fa-users"></i> Usuarios</a></li>
				<li><a data-toggle="tab" class = "sinBorde" href="#cursos"><i class="fa fa-fw fa-book"></i> Cursos</a></li>
			</ul>

			<form action="#" class="navbar-search form-inline" style="margin-top:6px">

			</form>
			<ul class="nav pull-right">
			<li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
				  <li><a href="desconectar.php"> Cerrar Cesión </a></li>
			</ul>
		  
	  </div>
	</div>

	<div class="tab-content" style = "background-color: transparent;">
		<div id="inicio" class="tab-pane fade in active" style = "background-color: #008;color:#ffffff;">
			<h3>INICIO</h3>
		</div>
		<div id="usuarios" class="tab-pane fade" style = "background-color: #008;color:#ffffff;">
			<?php
				include "panelUsuarios.php";
			?>
		</div>
		<div id="cursos" class="tab-pane fade" style = "background-color: #008;color:#ffffff;">
			
		</div>
		
	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">


<p>&copy; Copyright Sele <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script language = "javascript">
		$( document ).ready(function() {
			console.log( "ready!" );
		});
		function Curso(nombre, descipcion){
			this.nombre = nombre;
			this.descripcion = descipcion;
			this.modulos = new Array();
			
		}	
		var cursos = new Array();
		cursos.add(new Curso("Curso 1", "Curso 1"))
		cursos.add(new Curso("Curso 2", "Curso 2"))
	</script>
		
	</script>
  </body>
</html>