<?php
if($_GET['nombre'] == "") {
	header("Location: http://localhost/tem5/ej3");
	exit("NOMBRE NO VACIO");
}
session_start();


if(isset($_SESSION['nombres'])) {
	if(in_array(strtoupper($_GET["nombre"]), $_SESSION['nombres'])) {
		header("Location: http://localhost/tem5/ej4");
		exit("NOMBRE EN LISTA");

	}
	array_push($_SESSION['nombres'], strtoupper($_GET['nombre']));
	foreach ($_SESSION['nombres'] as $nombre => $value) {
		echo($value."<br>");

	}
} else {
	$_SESSION['nombres'] = [strtoupper($_GET['nombre'])];
	echo($_SESSION['nombres'][0]."<br>");
}

	

?>
<head>
	<title>NOMBRES</title>
</head>
<body>

	
	<a href='index.html'>Añadir otro nombre</a>
	<a href='terminar.php'>Terminar</a>
	
</body>
</html>