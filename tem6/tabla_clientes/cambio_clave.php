<?php
	header('Content-Type: text/html; charset=UTF-8');
	include 'encriptar.php';  
    include 'creacion_conexion.php';

    $email=$_POST['email'];
    $clave_old=$_POST['clave_old'];
    $clave_new=$_POST['clave_new'];
    $reclave=$_POST['reclave'];
    
    $conn = createConnection();
	
	if(!($clave_new === $reclave)) {
        header('Location: error.php?error=Contraseñas NUEVAS No Coinciden&n_error=007');
	}
    
    $sql_query = "SELECT Clave FROM clientes WHERE email='$email';";
    $resultado=$conn->query($sql_query);
    $resultado_1 = $resultado->fetch_assoc();

    $clave_guardada = $resultado_1['Clave'];
    
    if(correcto_blowfish($clave_guardada, $clave_old)) {
        $clave_enc = encript_blowfish($clave_new);
        $sql_query = "UPDATE clientes SET Clave='$clave_enc' where email = '$email'";
        $conn->query($sql_query);
        echo $sql_query;
        handleErrorQuery($conn);
        echo("CLAVE ACTUALIZADA");
    } else {
        echo "Las Claves No Coinciden";
    }
    
    
    ?>