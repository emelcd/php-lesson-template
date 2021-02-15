<?php
	header('Content-Type: text/html; charset=UTF-8');
	include 'encriptar.php';  

	if(!($_POST['clave1'] == $_POST['clave2']))	{
		echo("LAS CONSTRASEÑAS NO COINCIDEN");
		sleep(3);
	}

	
?>