<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN MENU</title>
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
    a {
        color: green;
        text-decoration: none;
        font-size: x-large;

    }
    a:hover {
        color: red;
    }
    img {
        box-shadow: 5px 10px #888888;
        margin-right: 3vw;
        
    }
    h5 {
        color: grey;
    }
    h5:hover {
        color: black;
    }

</style>
<h2>THE BASICS</h2>
    <?php
    // Variables
    $numpi = 3.1415; 
    $name = "Número PI";
    $isornot = false;
    // Indice reccorido -> array[0] es el primer elemento
    $arraynumber = array("Número E", "Número de Fluzo", TRUE);
    IF($arraynumber[2] == TRUE) {
        
    }

    echo "<h4>El $name es $numpi. . Otros Números son $arraynumber[0] o $arraynumber[1]</h4>";

    ?>
    <!-- // Preguntando por Input
    // GET método no privado(URL) \ POST más Seuro -->
    <form action="index.php" method="get">
        PON TU NAME -> <input type="text" name="name" require>
        <input type="submit">
    </form>
    
    <?php 
    // COmpureba que esté asignada
    if(isset($_GET["name"])) {
        echo "<h2>".$_GET["name"]." necesitas un editor de código, <a href='https://code.visualstudio.com/sha/download?build=stable&os=win32-x64-user'> vscode</a>, poejemplo </h2>";
    }
    
    ?>

    <hr>
    <br>
    <h5 style="float: right;">Mike</h5>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
    <img   style="float: right;" height=180 src="https://i.pinimg.com/originals/7b/aa/25/7baa252dbdfeed669c152bedd2fa5feb.jpg" alt="Drunken Teacher">
    
    </a>
    <h2>REPASO DEL DOMINGO</h2>
    <h3>Tema 3</h3>
    <a href="tem3/ex3_1.php">TEMA 3 PARTE 1</a>
    <br>
    <a href="tem3/ex3_2.php">TEMA 3 PARTE 2</a>
    <br>
    <a href="tem3/ex3_3.php">TEMA 3 PARTE 3</a>
    <br>
    <a href="tem3/ex3_4.php">TEMA 3 PARTE 4</a>
    <br>
    <a href="chess/pr3_ajedrez.php">PRACTICA 3 AJEDREZ</a>
    <br>
    <a href="tem5/ej1/index.html">Tema 5 1</a>
    <br>
    <a href="tem5/ej2/index.html">Tema 5 2</a>
    <br>
    <a href="tem5/ej3/index.html">Tema 5 3</a>
    <br>
    <a href="tem5/ej4/index.html">Tema 5 4</a>
    <br>
    <a href="tem5/ej5/index.html">Tema 5 5</a>
    <br>
    <a href="tem5/ej6/index.php">Tema 5 6</a>
    <br>
    <a href="tem5/ej7/index.php">Tema 5 7</a>
    <br>
    <a href="tem5/ej8/index.php">Tema 5 8</a>
    <br>
    <a href="tem6/tabla_clientes">Tema 6 Clientes</a>
    <br>
    <a href="tem6/provincias">Tema 6 Pueblos</a>
    <br>
    <a href="tem6/citas">Tema 6 Citas</a>
    <br>
    <a  href="./tester/connectMysql.php">MySQL</a>
    <br>
    <a  href="./tester/urlshorter.php">URL</a>



    
    
</body>
</html>