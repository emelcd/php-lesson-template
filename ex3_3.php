<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Parte 3</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            transition: 1s;
        }

        body {
            background-color: #f5f5dc;
            font-family: 'Poppins', sans-serif;
        }

        h3 {
            color: blue;
            font-size: x-large;

        }
    </style>
    <!-- EJERCICIO 9 -->
    <h3>Ejercicio 9</h3>
    <h5>MULTIPLICACIÓN CON BUCLE</h5>
    <form action="ex3_3.php" method="get">
        <input type="number" name="ex91" id="ex91">
        <input type="number" name="ex92" id="ex92">
        <input type="submit">
    </form>

    <br>
    <?php

    function bucleMul($number1, $number2)
    {
        $total = 0;
        for ($i = $number2; $i > 0; $i = $i - 1) {
            $total = $total + $number1;
        }
        echo $total;
    }
    if (isset($_GET["ex91"])) {

        bucleMul($_GET["ex91"], $_GET["ex92"]);
    }



    ?>
    <hr>
    <!-- EJERCICIO 10 -->
    <h3>Ejercicio 10</h3>
    <h5>IF DE STRIGS</h5>
    <form action="ex3_3.php" method="get">
        <h4>Nombre / Idioma</h4>
        <input type="text" name="ex101" id="ex101">
        <input type="text" name="ex102" id="ex102">

        <input type="submit">
    </form>
    <br>
    <?php

    function idiomCheck($string1, $string2)
    {
        if ($string2 == "CASTELLANO") {
            echo "Hola " . $string1;
        } elseif ($string2 == "INGLES") {
            echo "Hi " . $string1;
        } else {
            echo "O eres Franchute o no tenemos tu Idioma";
        }
    }
    if (isset($_GET["ex101"])) {

        idiomCheck($_GET["ex101"], $_GET["ex102"]);
    }



    ?>
    <hr>
    <!-- EJERCICIO 11 -->
    <h3>Ejercicio 11</h3>
    <?php
    $dividendo = -7;
    $divisor = -2;
    if ($divisor == 0) {
        echo "No se puede dividir por 0 <br>";
        echo "<a href='index11.html'/> reintentar";
    } elseif ($dividendo < 0 or $divisor < 0) {
        echo "ERROR 404: los numeros deben de ser positivos <br>";
    } else {
        $cociente = (int)($dividendo / $divisor);
        $resto = $dividendo % $divisor;
        echo "$dividendo entre $divisor da $cociente ";
        echo "con resto $resto";
    }


    ?>
    <hr>
    <!-- EJERCICIO 12 -->
    <h3>Ejercicio 12</h3>
    <h5>CHECK el MENOR</h5>
    <form action="ex3_3.php" method="get">
        <input type="number" name="ex121" id="ex121">
        <input type="number" name="ex122" id="ex122">
        <input type="number" name="ex123" id="ex123">
        <input type="submit">
    </form>

    <?php
    
    // $numero1 = 7;
    // $numero2 = 7;
    // $numero3 = 8;
    // if ($numero1 < $numero2 && $numero1 < $numero3) {
    //     echo "$numero1 es el menor de todos <br>";
    //     echo "<a href='index12.html'/> reintentar";
    // } elseif ($numero2 < $numero1 & $numero2 < $numero3) {
    //     echo "$numero2 es el menor de todos<br>";
    //     echo "<a href='index12.html'/> reintentar";
    // } else {
    //     echo "$numero3 es el menor de todos<br>";
    //     echo "<a href='index12.html'/> reintentar";
    // }

    function checkM($number1, $number2, $number3)
    {
        $rminor = array($number1, $number2, $number3);
        echo min($rminor);
    }


    if (isset($_GET["ex121"])) {

        checkM($_GET["ex121"], $_GET["ex122"], $_GET["ex123"]);
    }

    ?>
    <hr>
    <!-- EJERCICIO 13 -->
    <h3>Ejercicio 13</h3>
    <h5>ORDENAR CON IF?</h5>
    <form action="ex3_3.php" method="get">
        <input type="number" name="ex131" id="ex131">
        <input type="number" name="ex132" id="ex132">
        <input type="submit">
    </form>

    <?php
    function sortN($number1, $number2)
    {
        if ($number1 > $number2) {
            echo $number1 . " es mayor que " . $number2;
        } elseif ($number1 == $number2) {
            echo "Son el mismo número";
        } else {
            echo $number2 . " es mayor que " . $number1;
        }
    }


    if (isset($_GET["ex131"])) {

        sortN($_GET["ex131"], $_GET["ex132"]);
    }

    ?>
    <hr>
    <h3><a style="text-decoration: none; color: black;" href="index.php">RETURN TO MAIN</a></h3>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>