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
<!-- EJERCICIO 1 -->
<h3>Ejercicio 1</h3>
    <h5>CHECKEA +/-</h5>
    <form action="ex4_1.php" method="get">
        <input type="number" name="ex1" id="ex1">
        <input type="submit">
    </form>
    <br>
    <?php 
        function isPostive($v1, $v2) {
            for ($i=0; $i < count($v1); $i++) { 
                # code...
            }
        }
        if (isset($_GET["ex1"])) {
            isPostive($_GET["ex1"]);
        }
        
        ?>
    <hr>
    
</body>
</html>