<html lang="es">

<head>
	<title>Ejercicio 5</title>

</head>

<body style="text-align:center">
	<br />
	<?php
	session_start();

	if (isset($_SESSION['filas']) && isset($_SESSION['columnas'])) {
		echo($_SESSION['filas']);
		echo($_SESSION['columnas']);
		
	} else {
		$_SESSION['filas'] = $_GET['filas'];
		$_SESSION['columnas'] = $_GET['columnas'];
	}

	function makeRow($colum) {
		for ($i=0; $i < $colum; $i++) { 
			return "<th><img src='imagenes/celda_vacia.png'></th>";

		}
	}

	for ($i=0; $i < $_SESSION['filas']; $i++) { 
		echo("<br>".$i);
	}


	?>

	<br />
	<table>
		<form action="jugar.php" method="get">
			<tr>
				<td> </td>
				<td>

					<input type='submit' name="arriba" value='&uarr;' />

				</td>
				<td> </td>
			</tr>
			<tr>
				<td>

					<input type='submit' name="izquierda"value='&larr;' />

				</td>
				<td>

					<input type='submit' name="abajo" value='&darr;' />

				</td>
				<td>

					<input type='submit' name="derecha" value='&rarr;' />

				</td>

			</tr>
		</form>
		<table>
			<a href='salir.php'>Terminar</a>
</body>

</html>