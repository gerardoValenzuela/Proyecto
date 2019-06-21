<?php
    if (@!$_SESSION['user']) {
        echo "//Marca 1";
        //header("Location:index.php");
    } elseif ($_SESSION['rol'] == 2) {
        echo "//Marca 2";
        //header("Location:index2.php");
    }
    require "../connect_db.php";
    $sql = ("SELECT * FROM curso;");
    $result = mysqli_query($mysqli, $sql);
    
    $rawdata = array(); //creamos un array
    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;
    while($row = mysqli_fetch_array($result))
    {   echo $row["nombre"];
        $rawdata[$i] = $row;
        $i++;
    }

    //mysqli_close($mysqli);//desconectamos la base de datos

    echo json_encode($rawdata);

?>