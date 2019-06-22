<?php
    if (@!$_SESSION['user']) {
        //echo "//Marca 1";
        //header("Location:index.php");
    } elseif ($_SESSION['rol'] == 2) {
        //echo "//Marca 2";
        //header("Location:index2.php");
    }
    $nombre = $_GET['nombre'];
    $descripcion = $_GET['descripcion'];
    require "../connect_db.php";
    $sql = "INSERT INTO curso (nombre, descripcion) VALUES ('".$nombre."', '".$descripcion ."');";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo "true";
    } else {
        echo "false";
    }
    mysqli_close($mysqli);//desconectamos la base de datos

 ?>