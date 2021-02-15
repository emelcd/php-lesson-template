<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset='utf8'/>
</head>
<body>
<style>
* {
	font-size: 1.2em;
	font-family: monospace;
	margin: auto;
	text-align: center;
}
</style>
	
	
	<form action='tratar.php' method='post'>
		<input type='submit' name='bajar' value='-'/>
		<?php 
		session_start();
			if(isset($_SESSION['valor'])){
				echo($_SESSION['valor']);
			} else {
				$_SESSION['valor'] = 0;
				echo($_SESSION['valor']);
			}
		?>
		<input type='submit' name='subir' value='+'/>
		<br/>
		<input type='submit' name='ini' value='Inicializar'/>
	</form>
</body>
</html>

