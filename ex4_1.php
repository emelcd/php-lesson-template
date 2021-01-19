<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h5>Devuelve un Vector Siempre que se introduzca con números despues de comas: 2,3,12,4,...</h5>
    <form action="ex4_1.php" method="get">
        <input type="text" name="aux" id="aux">
        <input type="submit">
    </form>
    <?php
    function numToVector($string)
    {

        if ((preg_match("#^[0-9,]+$#", $string))) {
            $claves = preg_split("/[\s,]+/", $string);
            return $claves;
        } else {
            echo "Vector No Válido";
        }
    }




    ?>

    <hr>




    <!-- EJERCICIO 1 -->
    <h3>Ejercicio 1</h3>
    <h5>Producto Cruzado</h5>
    <form action="ex4_1.php" method="get">
        <input type="text" name="ex1a" id="ex1a">
        <input type="text" name="ex1b" id="ex1b">
        <input type="submit">
    </form>
    <br>
    <?php
    function vecProCru($v1X, $v2Y)
    {
        
        $suma = 0;
        for ($i = 0; $i < count($v1X); $i++) {
            $productos = $v1X[$i] * $v2Y[count($v1X) - $i - 1];
            // echo $productos . "<br>";
            $suma = $suma + $productos;
        }
        echo $suma . "<br>";
    }

    if (isset($_GET["ex1a"])) {
        vecProCru(numToVector($_GET["ex1a"]) ,numToVector($_GET["ex1b"]));
    }
    ?>
    <hr>
    <!-- EJERCICIO 2 -->
    <h3>Ejercicio 2</h3>
    <h5>CHECKEA +/-</h5>
    <form action="ex4_1.php" method="get">
        <input type="text" name="ex2" id="ex2">
        <input type="submit">
    </form>
    <br>
    <?php
    function vecOrdenar($v1)
    {
        $v2 = array();
        for ($i = 0; $i < count($v1); $i++) {
            $vuelta = $v1[count($v1) - $i - 1];
            array_push($v2, $vuelta);
        }
        foreach ($v2 as $item) {
            echo $item;
        }
    }


        if (isset($_GET["ex2"])) {
            vecOrdenar(numToVector($_GET["ex2"]));
        }
        ?>

    <hr>


</body>

</html>