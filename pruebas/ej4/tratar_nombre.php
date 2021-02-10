<?php
	session_start();
	if(isset($_SESSION['nombres'])) {
		array_push($_SESSION['nombres'], strtoupper($_GET['nombre']));
		foreach ($_SESSION['nombres'] as $nombre => $value) {
			echo($value."<br>");
	
		}
	} else {
		$_SESSION['nombres'] = [$_GET['nombre']];
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