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
    $id = $_GET['id'];
    require "../connect_db.php";
    $sql = "delete from `curso`  where id= ".$id.";"; 
    $dir_subida = '../pdfs/';
    if(file_exists ( $dir_subida . $idCurso )){
        rmdir ( $dir_subida . $idCurso  );
    }else{
        
    }
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        $sql1 = "delete from `modulo`  where idCurso= ".$id.";"; 
        $result1 = mysqli_query($mysqli, $sql1);
        if ($result1) {
            header("Location:../indexAdmin.php?v=listadodeCursos");
            echo "true";
        }
    } else {
        echo '\nsql'.$sql;
        echo '\nnombre'.$nombre;
        echo '\ndescuipcion'.$descripcion;
        echo '\nid'.$id;
        
        echo "false";
    }
    mysqli_close($mysqli);//desconectamos la base de datos
  
 ?>