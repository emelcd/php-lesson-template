<!-- PHP SE RENDERIZA DENTRO DEL HTML  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP101</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background-color: #CFF4FC;
            font-size: x-large;
        }
    </style>
    <div class="container">
        <!-- php se inicia mediante la llama a '< ?php ?>' -->
        <?php
        // VARIABLES
        // Las Variables Son Contenedores de infromación
        // Siempre llevan $ delante del nombre
        // Pueden ser de diferentes tipos
        // String = Cadena de Texo => "HOLA";
        $saludo = "HOLA";
        $nombre = "Emel";
        // Int => Entero => 3;
        $asignaturas = 3;
        // Float => Decimal => 5.73; 
        $media = 5.73;
        // Booleano=> Si/No => true;
        $aprobado = true;

        // Llamada a Variables con echo - DEVUELVE CóDIGO HTML
        echo $saludo;
        echo "<h1>$saludo</h1>";
        echo "<hr>"; //Linea Divisoria
        // Concatenación de Variables
        // echo "<br>"; //Salto de linea
        echo "<h5>$saludo $nombre</h5><p>En las $asignaturas  asignaturas que cursas, has sacado de media un $media <p>";
        echo "<hr>"; //Linea Divisoria

        // Estructuras de control -> if(condicionVerdad) - EJECUTO CÓDIGO -else (condicionFalsa)- Ejecuto Código

        if ($nombre == "Emel") {
            echo "Este es el alumno $nombre";
        } else {
            echo "Este no es $nombre";
        }

        echo "<hr>"; //Linea Divisoria
        // Como saber si ha aprobado un alumno -> Variable de Control
        $media = 6.73;
        echo" <b>Ej 1. ¿Cómo saber si ha aprobado? </b>
        <br>Si $media es mayor o igual que 5 ha aprobado<br>";

        if ($media >= 5) {
            echo "HA APROBADO con un $media de media";
        } else {
            echo "HA SUSPENDIDO con un $media de media";
        }
        echo "<hr>"; //Linea Divisoria
        ?>

        <!-- OBTENIENDO INPUT DEL USUARIO -->
        <!-- METODOS GET Y POST => action="nombre.php"-->
        <form action="php101.php" method="get">
            <!-- VAMOS A SOLICITAR UN NOMBRE -->
            <input type="text" name="nombreInput">
            <input type="submit" value="BOTON">
            <!-- Boton que envía el formulario a la página -->
        </form>
        <!-- ObTENIENDO LA RESPUESTA POR PHP -->
        <?php
        // PREVENIMOS LA EJECUCIÓN DE CÓDIGO **important
        //  SI LA VARIABLE NO ESTÁ DECLARADA con if(isset)=>Código
        if (isset($_GET["nombreInput"])) {
            // ASIGNAMOS LA SUPER VARIABLE con $_GET["name"]
            $nombre = $_GET["nombreInput"];
            echo $nombre;
        }
        echo "<hr>";
        echo "<b>Ej 2. Multiplica un número dado en un input por 2pi --></b>";
        ?>
        <!-- Pi es igual a  3.14159265358979323846

        </p>-->
        <form action="php101.php" method="get">
            <input type="floatval" name="radio" id="radio">
            <input type="submit" value="CALCULA LA CIRCUNFERENCIA">
        </form>
        <?php
        if (isset($_GET["radio"])) {
            $radio = $_GET["radio"];
            $pi = 3.14159265358979323846;
            $circunferencia = 2 * $radio * $pi;

            echo "LA CIRCUNFERENCIA DE UN CÍRCULO CON RADIO $radio cm ES IGUAL A $circunferencia cm<hr>";
        }


        ?>

    </div>
</body>

</html>