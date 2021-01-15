<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Parte 4</title>
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
<!-- EJERCICIO 14 -->
    <h3>Ejercicio 14</h3>
    <h5>CHECKEAR IGUALES</h5>
    <form action="ex3_4.php" method="get">
        <input type="number" name="ex141" id="ex141">
        <input type="number" name="ex142" id="ex142">
        <input type="number" name="ex143" id="ex143">
        <input type="submit">
    </form>

    <?php 
    function checkI($number1, $number2, $number3){
        if ($number1 == $number2 OR $number1 == $number3 OR $number2 == $number3) {
            echo "HAY IGUALES";
        } else {
            echo "SON DIFERENTES";
        }
    };


    if (isset($_GET["ex141"])) {
            
        checkI($_GET["ex141"], $_GET["ex142"], $_GET["ex143"]);
    }
        
    ?>
    <br>
    <hr>
<!-- EJERCICIO 15 -->
    <h3>Ejercicio 15</h3>
    <h5>DAR LA SUMA</h5>
    <form action="ex3_4.php" method="get">
        <input type="number" name="ex151" id="ex151">

        <input type="submit">
    </form>

    <?php 
    function sumCh($number1){
        $strNumber = strval($number1);
        $strLen = strlen((string)$strNumber);
        $sum = 0;
        for ($i = 0; $i < $strLen  ; $i = $i + 1) {
            $try = intval($strNumber[$i]);
            $sum = $sum + $try;
            // echo $try;
        } 
        echo $sum;

        


    };


    if (isset($_GET["ex151"])) {
            
        sumCh($_GET["ex151"]);
    }
        
    ?>
    <br>
    <hr>
<!-- EJERCICIO 16 -->
    <h3>Ejercicio 16</h3>
    <h5>ASCENDENTE</h5>
    <form action="ex3_4.php" method="get">
        <input type="number" name="ex161" id="ex161">

        <input type="submit">
    </form>

    <?php 
    function su2mCh($number1){
        $strNumber = strval($number1);
        $strLen = strlen((string)$strNumber);
        for ($i = 0; $i < $strLen - 1  ; $i = $i + 1) {
            $try = intval($strNumber[$i]);
            $try2 = intval($strNumber[$i + 1]);
            echo $try." < ".$try2."<br>";
            if ($try >= $try2) {
                echo "No es Ascendente";
                return;
            } 
            
        } 
        echo "ES ASCENDENTE";
        

        


    };


    if (isset($_GET["ex161"])) {
            
        su2mCh($_GET["ex161"]);
    }
        
    ?>
    <br>
    <hr>
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
    <img width="230" src="https://i.pinimg.com/originals/a2/72/e8/a272e8985f6c4cecef564dacbbf0faa3.jpg">
</body>
</html>