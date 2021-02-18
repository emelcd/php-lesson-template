<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <input type="text" name="ciudadBuscar" id="ciudadBuscar">
        <input type="submit">
    </form>

    <?php
    include 'creacion_conexion.php';


    $ciudad = $_GET['ciudadBuscar'];

    $conn = createConnection();

    $sql_query = "select * from clientes where ciudad= '$ciudad' ";
    // echo($sql_query);

    $result=$conn->query($sql_query);
    
    foreach ($result as $query) {
        echo($query['email']."->".$query['Ciudad']."<br>");
    }


    ?>
</body>

</html>