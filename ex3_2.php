<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Parte 2</title>
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
    <!-- EJERCICIO 5 -->
    <h3>Ejercicio 5</h3>
    <h5>GENERA EL FACTORIAL</h5>
    <form action="ex3_2.php" method="get">
        <input type="number" name="ex5" id="ex5">
        <input type="submit">
    </form>
    <br>
    <?php 
        function theFactorial($number) {
            $factorial = 1;
            // Número 5
            for ($i = $number; $i > 0; $i = $i -1 ) {
                $factorial = $factorial * $i;
                // BUCLE 5
                // Bucle 5 * 4
                // Bucle 5 * 4 * 3
                // Bucle 5*4*3*2*1
                
            }
            echo $factorial;
        }
        if (isset($_GET["ex5"])) {

            theFactorial($_GET["ex5"]);
        }
        

    ?>
    <hr>
    <!-- EJERCICIO 6 -->
    <h3>Ejercicio 6</h3>
    <h5>CHECKEA CAPICUA</h5>
    <form action="ex3_2.php" method="get">
        <input type="number" name="ex6" id="ex6">
        <input type="submit">
    </form>
    <br>
    <?php 

        function checkCapi($number) {
            if ($number < 0) {
                echo "PON UN ENTERO POSITIVO";
                return;
            }

            $right = strval($number);
            $reverse = strrev($right);
            if ($right == $reverse) {
                echo "ES CAPICUA"."<br>";
            } else {
                echo "NO ES CAPICUA"."<br>";
            }
            echo $reverse;

        }
        if (isset($_GET["ex6"])) {

            checkCapi($_GET["ex6"]);
        }

        

    ?>
    <hr>
    <!-- EJERCICIO 7 -->
    <h3>Ejercicio 7</h3>
    <h5>CHECKEA PRIMO</h5>
    <form action="ex3_2.php" method="get">
        <input type="number" name="ex7" id="ex7">
        <input type="submit">
    </form>
    <br>
    <?php 
        // $number1 = primo
        function checkPrime($number) {
            // 17 (2, 3, 4, 5, 6, 7, 8, 9, --)
            for ($i = $number - 1; $i > 1; $i = $i -1 ) {
                $resto = $number % $i;
                echo $resto." ";
                if ($resto == 0) {
                    echo "<br>No es primo";
                    return;
                }
                // $checker2 = is_int($checker);
            }
            echo "<br>Es primo";
            


        }
        if (isset($_GET["ex7"])) {

            checkPrime($_GET["ex7"]);
        }

        

    ?>
    <hr>
    <!-- EJERCICIO 8 -->
    <h3>Ejercicio 8</h3>
    <h5>CHECKEA ELEVADO</h5>
    <form action="ex3_2.php" method="get">
        <input type="number" name="ex81" id="ex81">
        <input type="number" name="ex82" id="ex82">
        <input type="submit">
    </form>
    <br>
    <?php 

        function checkExp($number1, $number2) {
            $exp = pow($number1, $number2);
            // $potencia = 1;
            // for ($i=0; $i < $number2; $i++) { 
            //     $potencia = $potencia * $number1;
            // }
            echo $exp;
            // echo $potencia;
        }
        if (isset($_GET["ex81"])) {

            checkExp($_GET["ex81"], $_GET["ex82"]);
        }

        

    ?>
    <hr>
    <h3><a style="text-decoration: none; color: black;"href="index.php">RETURN TO MAIN</a></h3>
</body>
</html>