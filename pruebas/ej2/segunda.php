<!DOCTYPE html>
<html lang="es">

<head>
	<title>Segunda página</title>

</head>

<body>
	<?php

	session_start();
	if (isset($_SESSION['nombre'])) {
	} else {
		header('Location: http://localhost/tem5/ej2');
	}


	echo ($_SESSION['nombre']);


	?>


	<br />
	<br />
	<hr />
	<h1>ÉSTA ES LA SEGUNDA PÁGINA DEL USUARIO <?php echo($_SESSION['nombre'])?></h1>
	<br />
	<ul>
		<li><a href='primera.php'>Primera</a></li>
		<li><a href='terminate.php'>Salir</a></li>
	</ul>
</body>

</html>