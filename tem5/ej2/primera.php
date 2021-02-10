<!DOCTYPE html>
<html lang="es">
<head>
     <title>Primera página</title>
    
</head>
<body>
	<?php
	session_start();

	if(isset($_GET['nombre']) and $_GET['nombre'] != ""){
		$_SESSION['nombreSesion'] = $_GET['nombre'];
	} 
	if (isset($_SESSION['nombreSesion'])) {
		echo($_SESSION['nombreSesion']);
		
	}
	else {
		header('Location: http://localhost/tem5/ej2');

	}


?>
<br/>
<br/>
	<hr/>
    <h1>ÉSTA ES LA PRIMERA PÁGINA DEL USUARIO <?php echo($_SESSION['nombreSesion']) ?></h1>
	<br/>
	<ul>
		<li><a href='segunda.php'>Segunda</a></li>
		<li><a href='salir.php'>Salir</a></li>
	</ul>
</body>
</html>