<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body style="background-image: url(arco.jpg);"></body>
    <body>
        <table>

            <tr>
                <td>titulo</td>
                <td>descripcion</td>
                <td>tamaño</td>
                <td>tipo</td>
                <td>nombre</td>
            </tr>
        <?php
include 'config.inc.php';
$db    = new Conect_MySql();
$sql   = "select*from tbl_documentos";
$query = $db->execute($sql);
while ($datos = $db->fetch_row($query)) {?>
            <tr>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento'] ?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>

          <?php }?>

        </table>
    </body>
</html>
