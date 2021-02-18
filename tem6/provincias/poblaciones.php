<?php
include './creacion_conexion.php';
$provincia = $_POST['provincia'];

$conn = createConnection();

$sql_query = "SELECT * FROM poblaciones WHERE provincias='$provincia'";

$qResult = createQuery($sql_query, $conn);



?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>POBLACIONES</title>
</head>

<body>
    <form action="final.php" method="get">
        <select name="eleccion" id="eleccion">

            <?php
            foreach ($qResult as $pueblo) {
                $pueblo = $pueblo['Poblacion'];
                
                echo ("<option value='$pueblo'>$pueblo</option>");
            }
            ?>
        </select>
        <input  name="provincia" type="hidden" value="<?php echo($provincia) ?>">
        <input type="submit">
    </form>

</body>

</html>