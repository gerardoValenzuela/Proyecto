<!DOCTYPE html>

<?php
include_once 'config.inc.php';
if (isset($_POST['CREAR'])) {
    $nombre  = $_FILES['archivo']['name'];
    $tipo    = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta    = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo = $_POST['titulo'];
            $descri = $_POST['descripcion'];
            $db     = new Conect_MySql();
            $sql    = "INSERT INTO tbl_documentos(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query  = $db->execute($sql);
            if ($query) {
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-image: url(arco.jpg);"></body>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>CREA UN NUEVO MODULO PARA LOS ALUMNOS</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="CREAR" name="CREAR"></td>
                        <td><a href="lista.php">MOSTRAR</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
