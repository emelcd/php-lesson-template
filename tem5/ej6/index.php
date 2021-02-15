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
			if(isset($_COOKIE['valor'])){
				echo($_COOKIE['valor']);
			} else {
				$_COOKIE['valor'] = 0;
				setcookie('valor', $_COOKIE['valor']);
				echo($_COOKIE['valor']);
			}
		?>
		<input type='submit' name='subir' value='+'/>
		<br/>
		<input type='submit' name='ini' value='Inicializar'/>
	</form>
</body>
</html>

