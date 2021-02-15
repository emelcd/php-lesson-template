<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<title>Cara</title>
	<style type='text/css'>
		img{
			display:block;
			margin:auto;
			width:166px;
			height:134px;
		}
		
		div{
			width:350px;
			height:350px;
			background-color:pink;
			margin:auto;
		}
		fieldset{
			width:260px;
			text-align:center;
			margin:auto;
		}
		.boton{
			width:60px;
		}
	</style>
	
</head>
<body>
	<div>
		<br/><br/>
		<img id='foto' src='images/nada.gif' alt='cara'/>
		<br/><br/>
		<form action='tratar.php' method='post'>
		<fieldset>
			<input class='boton' type='submit' name='boton' value='Dientes' />
			<input class='boton' type='submit' name='boton' value='Pelo' />
			<input class='boton' type='submit' name='boton' value='Gafas' />
			<input class='boton' type='submit' name='boton' value='Barbilla' />
		</fieldset>

		
		</form>
	</div>
</body>
</html>