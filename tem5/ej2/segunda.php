<!DOCTYPE html>
<html lang="es">
<head>
     <title>Segunda página</title>
    
</head>
<body>
	<?php
	
	session_start();

	if(!isset($_SESSION['nombreSesion'])) {
		header('Location: http://localhost/tem5/ej2');

	}

	
	
	
	?>
<br/>
<br/>
	<hr/>
    <h1>ÉSTA ES LA SEGUNDA PÁGINA <?php echo($_SESSION['nombreSesion']) ?></h1>
	<br/>
	<ul>
		<li><a href='primera.php'>Primera</a></li>
		<li><a href='salir.php'>Salir</a></li>
	</ul>
</body>
</html>