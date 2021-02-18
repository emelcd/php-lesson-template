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
    include "./errorfun.php";
    function createConnection($servername = "localhost", $user = "root", $password = "foofoo", $myDB = "implantacion_web")
    {
        $conn = new mysqli($servername, $user, $password, $myDB);
        return $conn;
    }


    if (isset($_GET['ciudadBuscar'])) {
        $ciudad = $_GET['ciudadBuscar'];
        $sql_query = "SELECT * FROM clientes WHERE Ciudad= '" . $ciudad . "';";
        $conn = createConnection();
        $result = $conn->query($sql_query);
        foreach ($result as $query) {
            foreach ($query as $value) {
                echo($value. "--");
            }
        }
    }


    ?>
</body>

</html>