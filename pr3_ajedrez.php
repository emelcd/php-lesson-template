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
            min-height: 60vh;
            max-height: 70vh;
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
        <select style="width: 20vw;" name="pieza" id="pieza" required>
            <option selected="selected"></option>
            <?php
            $piezas = array("Dama", "Torre", "Alfil", "Caballo", "Peon", "Rey");
            foreach ($piezas as $item) {
                $valuePiezas = strtolower($item);
                echo "<option value='$valuePiezas'>$item</option>";
            }
            ?>
        </select>
        <select style="width: 20vw;" name="xboard" id="xboard" required>
            <option selected="selected"></option>
            <?php
            $xindex = array("A", "B", "C", "D", "E", "F","G", "H");
            foreach ($xindex as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <select style="width: 20vw;" name="yboard" id="yboard" required>
            <option selected="selected"></option>
            <?php
            $yindex = array("1", "2", "3", "4", "5", "6","7", "8");
            foreach ($yindex as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br>
        <!-- <input type="text" name="xboard" id="xboard" required> -->
        <!-- <input type="number" name="yboard" id="yboard"> -->
        <br>
        <input type="submit" value="VER LAS AMENAZAS POR PIEZAS">


    </form>
    <?php

    function checkPos($posicionx, $posiciony)
    {
        $codePieza = $posicionx . $posiciony;
        return $codePieza;
    }
    if (isset($_GET["pieza"])) {

        checkPos($_GET["xboard"], $_GET["yboard"]);
    }
    ?>

    <h2>POSICIÖN AMENAZADA 👀</h2>

    <div class="container">
        <table>
            <?php

            function transformLetra($x)
            {
                switch ($x) {
                    case 'A':
                        return 0;
                    case 'B':
                        return 1;
                    case "C":
                        return 2;
                    case 'D':
                        return 3;
                    case 'E':
                        return 4;
                    case "F":
                        return 5;
                    case "G":
                        return 6;
                    case "H":
                        return 7;
                }
            }
            function tranformNumero($y)
            {
                switch ($y) {
                    case '1':
                        return 0;
                    case '2':
                        return 1;
                    case "3":
                        return 2;
                    case '4':
                        return 3;
                    case '5':
                        return 4;
                    case "6":
                        return 5;
                    case "7":
                        return 6;
                    case "8":
                        return 7;
                }
            }
            function makeTorre($pieza, $posicionx, $posiciony)
            {
                $letterArray = array("A", "B", "C", "D", "E", "F", "G", "H");
                $numberArray = array("1", "2", "3", "4", "5", "6", "7", "8");
                $bagof = array();
                // Tower Logic
                for ($i = 0; $i < 8; $i = $i + 1) {
                    $union1 = $letterArray[$i] . $numberArray[$posiciony];
                    $union2 = $letterArray[$posicionx] . $numberArray[$i];
                    array_push($bagof, $union1);
                    array_push($bagof, $union2);
                }
                
                array_unique($bagof);
                return $bagof;
            }
            
            function makeAlfil($pieza, $posicionx, $posiciony)
            {
                $letterArray = array("A", "B", "C", "D", "E", "F", "G", "H");
                $numberArray = array("1", "2", "3", "4", "5", "6", "7", "8");
                $bagof = array();

                //- Primera Aproximación
                //- 2
                // Obtener fórmula sobre la array
                // Diagonales positivas - 1 de las cordenadas llega a 0(-1,-1), después se elevan(+1,+1) hasta llegar a 7

                // PRIMERA DIAGONAL
                if ($posicionx >= $posiciony) {
                    $new1pa = $posicionx - $posiciony;
                    $new1pb = 0;
                } else {
                    $new1pb = $posiciony - $posicionx;
                    $new1pa = 0;
                }

                for ($i = 0; $i < 8; $i++) {
                    if ($new1pa + $i < 8 && $new1pb + $i < 8) {
                        $union1 = $letterArray[$new1pa + $i] . $numberArray[$new1pb + $i];
                        array_push($bagof, $union1);
                    }
                }

                // // SEGUNDA DIAGONAL- El algoritmo es mucho más complejo, depende de lo alejados del límite o yo no e sabido plantearlo
                if ($posicionx > 7 - $posiciony) {
                    $new2pa = $posicionx - (7 - $posiciony);
                    $new2pb = 7;
                    for ($i = 0; $i < 8; $i++) {
                        if ($new2pa + 7 - $i < 8) {
                            $union2 = $letterArray[$i] . $numberArray[$new2pa + 7 - $i];
                            array_push($bagof, $union2);
                        }
                    }
                } else {
                    $new2pa = 0;
                    $new2pb = $posicionx + $posiciony;
                    for ($i = 0; $i < 8; $i++) {
                        if ($new2pa + 7 - $i < 8) {
                            if ($new2pb - $i > -1) {
                                $union2 = $letterArray[$i] . $numberArray[$new2pb - $i];
                                array_push($bagof, $union2);
                            }
                        }
                    }
                };
                array_unique($bagof);
                return $bagof;
            }
            function makeDama($pieza)
            {
                $bagof = array();
                $bagofTorre = makeAlfil($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]));
                $bagofAlfil = makeTorre($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]));
                foreach ($bagofTorre as $item) {
                    array_push($bagof, $item);
                }
                foreach ($bagofAlfil as $item) {
                    array_push($bagof, $item);
                }


                array_unique($bagof);
                return $bagof;
            }
            function makeCaballo($pieza, $posicionx, $posiciony)
            {
                $letterArray = array("A", "B", "C", "D", "E", "F", "G", "H");
                $numberArray = array("1", "2", "3", "4", "5", "6", "7", "8");
                $bagof = array();
                // SALTOS DEL CABALLO
                if((($posicionx - 2 >= 0) && ($posiciony + 1 <= 7))){
                    $newP1 = $letterArray[$posicionx - 2] . $numberArray[$posiciony + 1];
                    array_push($bagof, $newP1);
                }
                if((($posicionx - 2 >= 0) && ($posiciony - 1 >= 0))){
                    $newP2 = $letterArray[$posicionx - 2] . $numberArray[$posiciony - 1];
                    array_push($bagof, $newP2);
                }
                if((($posicionx + 2 <= 7) && ($posiciony + 1 <= 7))){
                    $newP3 = $letterArray[$posicionx + 2] . $numberArray[$posiciony + 1];
                    array_push($bagof, $newP3);
                }
                if((($posicionx + 2 <= 7) && ($posiciony - 1 >= 0))){
                    $newP4 = $letterArray[$posicionx + 2] . $numberArray[$posiciony - 1];
                    array_push($bagof, $newP4);
                }
                if((($posicionx + 1 <= 7) && ($posiciony - 2 >= 0))){
                    $newP5 = $letterArray[$posicionx + 1] . $numberArray[$posiciony - 2];
                    array_push($bagof, $newP5);
                }
                if((($posicionx - 1 >= 0) && ($posiciony - 2 >= 0))){
                    $newP6 = $letterArray[$posicionx - 1] . $numberArray[$posiciony - 2];
                    array_push($bagof, $newP6);
                }
                if((($posicionx + 1 <= 7) && ($posiciony + 2 <= 7))){
                    $newP7 = $letterArray[$posicionx + 1] . $numberArray[$posiciony + 2];
                    array_push($bagof, $newP7);
                }
                if((($posicionx - 1 >= 0) && ($posiciony + 2 <= 7))){
                    $newP8 = $letterArray[$posicionx - 1] . $numberArray[$posiciony + 2];
                    array_push($bagof, $newP8);
                }

                array_unique($bagof);
                return $bagof;

            }
            function makeRey($pieza, $posicionx, $posiciony) 
            {
                $letterArray = array("A", "B", "C", "D", "E", "F", "G", "H");
                $numberArray = array("1", "2", "3", "4", "5", "6", "7", "8");
                $bagof = array();
                // Direcciones
                // Hacia arriba
                // isset soluciona todos los problemas
                for ($i=-1; $i <2; $i++) { 
                    for ($j=-1; $j < 2; $j++) { 
                        if(isset($letterArray[$posicionx + $i]) && isset($numberArray[$posiciony + $j])) {
                            $union1 = $letterArray[$posicionx + $i].$numberArray[$posiciony + $j];
                            array_push($bagof, $union1);
                        }
                    }
                }
                
                // 


                array_unique($bagof);
                return $bagof;
            }
            function makePeon($pieza, $posicionx, $posiciony) 
            {
                $letterArray = array("A", "B", "C", "D", "E", "F", "G", "H");
                $numberArray = array("1", "2", "3", "4", "5", "6", "7", "8");
                $bagof = array();
                for ($i=-1; $i < 2; $i = $i + 2) { 
                    if(isset($letterArray[$posicionx + $i]) && isset($numberArray[$posiciony + 1])){
                        $union1 = $letterArray[$posicionx + $i].$numberArray[$posiciony + 1];
                        array_push($bagof,$union1);

                    }
                }
                array_unique($bagof);
                
                return $bagof;
            }




            function makePi($piz)
            {
                switch ($piz) {
                    case 'dama':
                        return "&#9813;";
                    case 'torre':
                        return "&#9814;";
                    case 'alfil':
                        return "&#9815;";
                    case 'caballo':
                        return "&#9816;";
                    case 'peon':
                        return "&#9817;";
                    case 'rey':
                        return "&#9812;";  
                    

                }
                return $piz;
            }

            function makeWrite($codePosition)
            {
                $posUser = checkPos($_GET["xboard"], $_GET["yboard"]);
                if ($codePosition == $posUser) {
                    return makePi($_GET["pieza"]);
                } 
                else if ($_GET["pieza"] == "torre") {
                    if (in_array($codePosition, makeTorre($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        // echo "LA TORRE EN".transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]);
                        // echo $codePosition. " ";
                        return "*";
                    }
                } 
                else if ($_GET["pieza"] == "alfil") {
                    if (in_array($codePosition, makeAlfil($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        return "*";
                    }
                } 
                else if ($_GET["pieza"] == "dama") {
                    if (in_array($codePosition, makeDama($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        return "*";
                    }
                }
                else if ($_GET["pieza"] == "caballo") {
                    if (in_array($codePosition, makeCaballo($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        return "*";
                    }
                }
                else if ($_GET["pieza"] == "rey") {
                    if (in_array($codePosition, makeRey($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        return "*";
                    }
                }
                else if ($_GET["pieza"] == "peon") {
                    if (in_array($codePosition, makePeon($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        return "*";
                    }
                }
                return $codePosition;
            }
            function makeRow($colorStart, $letterIndex, $numberRow)
            {
                $letterArray = array("A", "B", "C", "D", "E", "F", "G", "H");
                $classBoard = $colorStart;
                for ($i = 8; $i > 0; $i = $i - 1) {
                    $codeP = $letterArray[$letterIndex] . $numberRow;
                    echo "<th class=$classBoard>" . makeWrite($codeP) . "</th>";
                    if ($classBoard == "white-board") {
                        $classBoard = "black-board";
                    } else {
                        $classBoard = "white-board";
                    }
                    $letterIndex++;
                }
            };
            function makeTable()
            {
                $letterIndex = 0;
                $classBoard = "black-board";
                for ($i = 8; $i > 0; $i = $i - 1) {
                    echo "<tr>";
                    echo makeRow($classBoard, $letterIndex, $i);
                    echo "</tr>";
                    if ($classBoard == "white-board") {
                        $classBoard = "black-board";
                    } else {
                        $classBoard = "white-board";
                    }
                }
            }
            if (isset($_GET["pieza"]) && isset($_GET["xboard"]) && isset($_GET["yboard"]))
            {
                makeTable();
            } else {
                echo "<h3>INTRODUCE PARÁMTEROS</h3>";

            }


            




            ?>
        </table>
    </div>


</body>

</html>