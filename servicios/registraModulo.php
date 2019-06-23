<?php
    if (@!$_SESSION['user']) {
        //echo "//Marca 1";
        //header("Location:index.php");
    } elseif ($_SESSION['rol'] == 2) {
        //echo "//Marca 2";
        //header("Location:index2.php");
    }
    $idCurso = $_POST['idCurso'];
    //$pdf = $_POST['pdf'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $dir_subida = '../pdfs/';
    $fichero_subido = $dir_subida . basename($_FILES['pdf']['name']);
    
    require "../connect_db.php";
    $sql = "INSERT INTO Modulo (idCurso, nombre, descripcion, pdf) VALUES (" . $idCurso . ',"' . $nombre . '","' . $descripcion . '","' . $_FILES['pdf']['name'].'");';
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        

        echo '<pre>';
        if (move_uploaded_file($_FILES['pdf']['tmp_name'], $fichero_subido)) {
            header("Location:../indexAdmin.php?v=listadodeCursos");
            echo "true";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
            echo 'Más información de depuración:';
            print_r($_FILES);
    
            print "</pre>";
            echo "false";
        }

       
        

    } else {
        echo "false";
    }
    mysqli_close($mysqli);//desconectamos la base de datos
?>