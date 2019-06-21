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

						echo "<table border='1'; class='table table-hover'; style = 'color:#000000;'>";
						echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usaurio</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
						echo "</tr>";

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
				</div>
			</div>
		</div>
	</div>
</div>
