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
        <select style="width: 20vw;" name="pieza" id="pieza">
            <option selected="selected">Elige Pieza</option>
            <?php
            $piezas = array("Dama", "Torre", "Alfil", "Caballo", "Peón");
            foreach ($piezas as $item) {
                $valuePiezas = strtolower($item);
                echo "<option value='$valuePiezas'>$item</option>";
            }
            ?>
        </select>
        <br>
        <input type="text" name="xboard" id="xboard" required>
        <input type="number" name="yboard" id="yboard">
        <br>
        <input type="submit" value="X">


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
            function transformLetra($x) {
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
            function tranformNumero($y) {
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
                        # code...

                }
                return $piz;
            }

            function makeWrite($codePosition)
            {
                $posUser = checkPos($_GET["xboard"], $_GET["yboard"]);
                if ($codePosition == $posUser) {
                    return makePi($_GET["pieza"]);
                } else if ($_GET["pieza"] == "torre") {
                    if (in_array($codePosition, makeTorre($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]))) ) {
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
            makeTable();


            ?>
        </table>
    </div>


</body>

</html>