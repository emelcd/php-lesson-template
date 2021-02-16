<?php
header('Content-Type: text/html; charset=UTF-8');

include 'encriptar.php';

function checkPassWord()
{
	if (!($_GET['clave1'] == $_GET['clave2'])) {
		header("Location: error.php?error=LA CONSTRASEÑA NO COINCIDE&n_error=PASSWORD MISSMATCH");
		die;
	} else {
		return TRUE;
	}
}

function handleErrorsConnection($conn)
{
	if ($conn->connect_error) {
		$error = $conn->connect_error;
		$n_error = $conn->connect_errno;
		header("Location: error.php?error=" . $error . "&n_error=" . $n_error);
		die;
	}
}

function createConnection($servername = "localhost", $user = "root", $password = "foofoo", $myDB = "implantacion_web")
{
	$conn = new mysqli($servername, $user, $password, $myDB);
	handleErrorsConnection($conn);
	return $conn;
}

function handleErrorsQuery($bool, $conn)
{
	$error = $conn->error;
	if ($bool === FALSE) {
		header("Location: error.php?error=" . $error . "&n_error= QUERY ERROR");
		die;
	}
}

function insertData($email = "roun@maxim.com", $password = "eco", $nombre = "Emel", $apellido1 = "Gallardo", $apellido2 = "Somon", $ciudad = "Madrid", $direccion = "CAlmirante Sorolla23")
{

	$conn = createConnection("localhost", "root", "-.,asd", "implantacion_web");
	$sql_query = "INSERT INTO clientes (email, Clave, Nombre, Ap1, Ap2, Ciudad, Direccion) VALUES ('" . $email . "','" . $password . "','" . $nombre . "','" . $apellido1 . "','" . $apellido2 . "','" . $ciudad . "','" . $direccion . "');";
	$result = $conn->query($sql_query);
	handleErrorsQuery($result, $conn);
	echo ("LOS DATOS HAN SIDO INSERTADOS");
}

if (checkPassWord()) {
	insertData($_GET['email'], encript_blowfish($_GET['clave1']), $_GET['nombre'], $_GET['apellido1'], $_GET['apellido2'], $_GET['ciudad'], $_GET['direccion']);
}



	// insertData($_GET['email'],$_GET['clave1'],$_GET['nombre'],$_GET['apellido1'],$_GET['apellido2'],$_GET['ciudad'],$_GET['direccion']);
