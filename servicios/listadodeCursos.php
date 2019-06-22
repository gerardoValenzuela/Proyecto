<?php
    if (@!$_SESSION['user']) {
        //echo "//Marca 1";
        //header("Location:index.php");
    } elseif ($_SESSION['rol'] == 2) {
        //echo "//Marca 2";
        //header("Location:index2.php");
    }
    require "../connect_db.php";
    $sql = ("SELECT * FROM curso;");
    $result = mysqli_query($mysqli, $sql);
    
    $rawdata = array(); //creamos un array
    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;
    $cadena = "[";
    while($row = mysqli_fetch_array($result))
    {   if($cadena != "["){
            $cadena = $cadena.",";  
        }
        $rawdata[$i] = $row;
        $cadena = $cadena.'{id:"'.$row["id"].'",nombre:"'.$row["nombre"].'",descripcion:"'.$row["nombre"].'"}'; 
        $i++;
    }
    $cadena = $cadena."]";

    //mysqli_close($mysqli);//desconectamos la base de datos

    echo $cadena;

?>