<?php
    if (@!$_SESSION['user']) {
        //echo "//Marca 1";
        header("Location:index.php");
    } elseif ($_SESSION['rol'] == 2) {
        //echo "//Marca 2";
        header("Location:index2.php");
    }
    $id = $_GET['id'];
    $user = $_GET['user'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $pasadmin = $_GET['pasadmin'];
    $rol = $_GET['rol'];
    require "../connect_db.php";
    $sql = "UPDATE `login` set `user` = '".$user."', `password` = '".$password."', `email` = '".$email."', `pasadmin` = '".$pasadmin."', `rol` = '".$rol."' where id= ".$id.";"; 

    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header("Location:../indexAdmin.php?v=listadodeUsuarios");
        echo "true";
    } else {
        echo '\nsql'.$sql;
        echo '\nnombre'.$nombre;
        echo '\ndescripcion'.$descripcion;
        echo '\nid'.$id;
        
        echo "false";
    }
    mysqli_close($mysqli);//desconectamos la base de datos
  
 ?>