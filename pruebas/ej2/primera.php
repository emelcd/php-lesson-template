<!DOCTYPE html>
<html lang="es">
<head>
     <title>Primera página</title>
    
</head>
<body>
	<?php
	session_start();
	if(isset($_GET['nombre']) && $_GET['nombre'] != "") {

		$_SESSION['nombre'] = $_GET['nombre'];

	} else {
		header('Location: http://localhost/tem5/ej2');


	}
	echo($_GET['nombre']);

	echo($_SESSION['nombre']);
	
	
	?>
<br/>
<br/>
	<hr/>
    <h1>ÉSTA ES LA PRIMERA PÁGINA DEL USUARIO <?php echo($_SESSION['nombre'])?></h1>
	<br/>
	<ul>
		<li><a href='segunda.php'>Segunda</a></li>
		<li><a href='terminate.php'>Salir</a></li>
	</ul>
</body>
</html>