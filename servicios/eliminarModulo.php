<?php
    if (@!$_SESSION['user']) {
        //echo "//Marca 1";
        //header("Location:index.php");
    } elseif ($_SESSION['rol'] == 2) {
        //echo "//Marca 2";
        //header("Location:index2.php");
    }
    $idCurso = $_POST['idCurso'];
    $idModulo = $_POST['idModulo'];
    //$pdf = $_GET['pdf'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    require "../connect_db.php";
    $sql = "delete from modulo  where id = ".$idModulo.';';
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header("Location:../indexAdmin.php?v=listadodeCursos");
        echo "true";

    } else {
        echo "false";
    }
    mysqli_close($mysqli);//desconectamos la base de datos
?>