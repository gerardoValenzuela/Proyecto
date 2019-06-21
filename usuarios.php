<!DOCTYPE html>
<?php
if (@!$_SESSION['user']) {
    header("Location:index.php");
} 
?>
<html lang="en">
    
<?php
include "include/headAdmin.php";
?>

    <?php
include "include/cabecera.php";
?>
</div>
</header>


<div class="row">
    <?php
include "include/menuAdmin.php";
?>

<div class="row">



    <div class="span12">

        <div class="caption">


        <h2> Datos De usuarios</h2>
        <div class="well well-small">
        <hr class="soft"/>
        <h4>Usuarios Registrados</h4>
        <div class="row-fluid">





            <?php

require "connect_db.php";
$sql = ("SELECT * FROM login");

$query = mysqli_query($mysqli, $sql);

echo "<table border='1'; class='table table-hover';>";
echo "<tr class='warning'>";
echo "<td>Id</td>";
echo "<td>Usaurio</td>";
echo "<td>Password</td>";
echo "<td>Correo</td>";
echo "<td>Password del administrador</td>";
echo "<td>Editar</td>";
echo "<td>Borrar</td>";
echo "</tr>";

?>

            <?php
while ($arreglo = mysqli_fetch_array($query)) {
    echo "<tr class='success'>";
    echo "<td>$arreglo[0]</td>";
    echo "<td>$arreglo[1]</td>";
    echo "<td>$arreglo[2]</td>";
    echo "<td>$arreglo[3]</td>";
    echo "<td>$arreglo[4]</td>";

    echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actu.png' class='img-rounded'></td>";
    echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eli.png' class='img-rounded'/></a></td>";

    echo "</tr>";
}

echo "</table>";

extract($_GET);
if (@$idborrar == 2) {

    $sqlborrar = "DELETE FROM login WHERE id=$id";
    $resborrar = mysqli_query($mysqli, $sqlborrar);
    echo '<script>alert("REGISTRO ELIMINADO")</script> ';

    echo "<script>location.href='admin.php'</script>";
}

?>

<form method= "post" action="http://localhost/proyecto/subirpdf">
 <button class="btn btn-outline-success">SUBIR NUEVA INFORMACION</button>

        <div class="span8">

        </div>
        </div>
        <br/>



        <!--EMPIEZA DESLIZABLE-->

         <!--TERMINA DESLIZABLE-->





        </div>






<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

    </div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Sele <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </style>
  </body>
</html>