<?php
	header('Content-Type: text/html; charset=UTF-8');
	include 'encriptar.php';  
	include 'creacion_conexion.php';
	
	$email= ($_POST['email']);
	$clave1= ($_POST['clave1']);
	$clave2= ($_POST['clave2']);
	$nombre= ($_POST['nombre']);
	$apellido1= ($_POST['apellido1']);
	$apellido2= ($_POST['apellido2']);
	$ciudad= ($_POST['ciudad']);
	$direccion= ($_POST['direccion']);

	if(!($clave1 === $clave2)) {
		header('Location: error.php?error=Contraseñas No Coinciden&n_error=007');
	}



	$conn = createConnection();

	$claveEncriptada = encript_blowfish($clave1);


	$sql_query = "INSERT INTO clientes (email, Clave, Nombre, Ap1, Ap2, Ciudad, Direccion) VALUES ('$email','$claveEncriptada','$nombre','$apellido1','$apellido2','$ciudad','$direccion')";

	$conn->query($sql_query);
	
	handleErrorQuery($conn);



	

	





	
?>