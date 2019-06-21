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
<?php
include "include/headAdmin.php";
?>

<body data-offset="40" background="images/arco.jpg" style="background-position: center top; ">
<div class="container">
		

<header class="header">
<div class="row">
<?php
include "include/cabecera.php";
?>
</div>
</header>

<div class="row" style = "background-color: transparent;">
    <?php
		include "include/menuAdmin.php";
	?>

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
			<?php
				include "panelCursos.php";
			?>
		  
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
	<script language = "javascript">
		$( document ).ready(function() {
			console.log( "ready!" );
		});
		function toggler(panel){
			alert("panel: " + panel);
			$("#inicio").hide();
			$("#cursos").hide();
			$("#usuario").hide();
			$(panel).show();
		}
		
	</script>
  </body>
</html>