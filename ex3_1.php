<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Parte 1</title>
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
<!-- EJERCICIO 1 -->
    <h3>Ejercicio 1</h3>
    <h5>CHECKEA +/-</h5>
    <form action="ex3_1.php" method="get">
        <input type="number" name="ex1" id="ex1">
        <input type="submit">
    </form>
    <br>
    <?php 
        function isPostive($number) {
            if ($number < 0) {
                // Se considera el 0 como Positivo
                echo "Negativo";
            } else {
                echo "Positivo";
            }
        }
        if (isset($_GET["ex1"])) {
            isPostive($_GET["ex1"]);
        }
        
        ?>
    <hr>
<!-- EJERCICIO 2 -->
    <h3>Ejercicio 2</h3>
    <h5>CHECKEA el ABSOLUTO</h5>
    <form action="ex3_1.php" method="get">
        <input type="number" name="ex2" id="ex2">
        <input type="submit">
    </form>   
    <br>

    <?php 
        function theAbsolut($number) {
            // SOlO AFECTA AL NEGATIVO
            if ($number < 0) {
                echo -1 * $number;
            } else {
                echo $number;
            }
        }

        if (isset($_GET["ex2"])) {
            theAbsolut($_GET["ex2"]);

        }
    ?>
    <hr>
<!-- EJERCICIO 3 -->
    <h3>Ejercicio 3</h3>
    <h5>GENERA EL SUMATORIO -DESDE n1 a n2-</h5>
    <form action="ex3_1.php" method="get">
        <input type="number" name="ex31" id="ex31">
        <input type="number" name="ex32" id="ex32">
        <input type="submit">
    </form>   
    <br>

    <?php 
        function summaN($number1, $number2){
            $sum = 0;
            for ($i = $number1; $i <= $number2; $i = $i + 1) {
                $sum = $sum + $i;
                
            };
            echo "$sum";
        }

        if (isset($_GET["ex31"])) {
            summaN($_GET["ex31"], $_GET["ex32"]);

        }
    ?>
    <hr>
<!-- EJERCICIO 3 -->
    <h3>Ejercicio 4</h3>
    <h5>GENERA EL SUMATORIO -DESDE n1 a n2 con salto n3-</h5>
    <form action="ex3_1.php" method="get">
        <input type="number" name="ex41" id="ex41">
        <input type="number" name="ex42" id="ex42">
        <input type="number" name="ex43" id="ex43">
        <input type="submit">
    </form>   
    <br>

    <?php 
        function summaNG($number1, $number2, $number3){
            $sum = 0;
            for ($i = $number1; $i <= $number2; $i = $i + $number3) {
                $sum = $sum + $i;
                
            };
            echo "$sum";
        }
        // Arreglo para que tengan que estar todas
        if (isset($_GET["ex41"])) {
            summaNG($_GET["ex41"], $_GET["ex42"], $_GET["ex43"]);
            
        }
    ?>
    <hr>





</body>
</html>