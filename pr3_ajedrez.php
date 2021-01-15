<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
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
            text-align: center;
        }

        h3 {
            color: blue;
            font-size: x-large;

        }
        .white-board {
            background-color: #EAD585;
        }
        .black-board {
            background-color: grey;
        }
        tr {
            height: 1rem;
        }

        table {
            min-height: 40vh;
            max-height: 60vh;
            min-width: 60vw;
            max-width: 80vh;
            height: 80vh;
            margin-left: auto; 
            margin-right: auto;
        }
        th {
            font-size: xx-large;
            width: 5vw;
            height: 5vh;
        }
        .container {
            margin: auto;
            text-align: center;
            
        }
    </style>
    <form action="pr3_ajedrez.php">
        DAMA<input type="checkbox" name="dama" id="dama">
        TORRE<input type="checkbox" name="torre" id="dama">
        ALFIL<input type="checkbox" name="alfil" id="dama">
        PEON<input type="checkbox" name="peón" id="dama">
        <br>
        POSICIÓN X <input type="number" name="xboard" id="xboard">
        POSICIÓN Y <input type="number" name="yboard" id="yboard">
        <select>
        <option selected="selected">Elige Pieza</option>
        <?php
        // A sample product array
        $piezas = array("Dama", "Torre", "Alfil", "Caballo", "Peón");
        
        // Iterating through the product array
        foreach($piezas as $item){
            echo "<option value='strtolower($item)'>$item</option>";
        }
        ?>
    </select>
        <input type="submit" value="">


    </form>
   
    <h2>POSICIÖN AMENAZADA 👀</h2>
    <div class="container">
        <table>
            <tr>
                <th class="white-board">&#9820;</th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
            <tr>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board">♕</th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
    
            </tr>
            <tr>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
            <tr>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
    
            </tr>
            <tr>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
            <tr>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
    
            </tr>
            <tr>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
            <tr>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
                <th class="black-board"></th>
                <th class="white-board"></th>
    
            </tr>
    
        </table>

    </div>


</body>

</html>