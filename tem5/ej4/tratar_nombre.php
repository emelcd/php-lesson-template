<?php

	session_start();
	


	

	

	if($_GET['nombre'] == ""){
		header("Location: http://localhost/tem5/ej4");
		exit;
	} 

	function isSetted() {

	}
	
	


	if(isset($_SESSION['arrayNombres'])) {
		if(in_array(strtoupper($_GET['nombre']), $_SESSION['arrayNombres'])) {
			header("Location: http://localhost/tem5/ej4");
			exit;
		}

		array_push($_SESSION['arrayNombres'], strtoupper($_GET['nombre']));

		foreach ($_SESSION['arrayNombres'] as $key => $value ) {
			echo($value."<br>");
			}

	} else {

		$_SESSION['arrayNombres'] = [strtoupper($_GET['nombre'])];
		echo($_SESSION['arrayNombres'][0]."<br>");
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