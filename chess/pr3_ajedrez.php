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
            /* transition: 1s; */
            margin: 0;
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
            background-color: grey;
        }

        .black-board {
            background-color: #EAD585;
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
            margin-bottom: 10rem;
            margin-top: 1rem;
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

        .piezas {
            background-color: #FFF690;
            border-radius: 50%;
            margin: auto;
            width: 50%;
        }
    </style>
    <form action="pr3_ajedrez.php">
        <hr>
        <h5>Amenaza</h5>
        <select style="width: 20vw;" name="pieza" id="pieza" required>
            <?php
            function randomPicker($arr)
            {
                echo $arr[array_rand($arr)];
            }
            $piezas = array("dama", "torre", "alfil", "caballo", "peon", "rey");
            $yindex = array("1", "2", "3", "4", "5", "6", "7", "8");
            $xindex = array("A", "B", "C", "D", "E", "F", "G", "H");
            ?>
            <option selected="selected"><?php randomPicker($piezas); ?></option>
            <?php
            foreach ($piezas as $item) {
                $valuePiezas = strtolower($item);
                echo "<option value='$valuePiezas'>$item</option>";
            }

            ?>

        </select>
        <select style="width: 20vw;" name="xboard" id="xboard" required>
            <option selected="selected"><?php randomPicker($xindex); ?></option>
            <?php
            foreach ($xindex as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <select style="width: 20vw;" name="yboard" id="yboard" required>
            <option selected="selected"><?php randomPicker($yindex); ?></option>
            <?php
            foreach ($yindex as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <hr>
        <h5>Amenazado</h5>
        <select style="width: 20vw;" name="piezan" id="piezan" required>
            <option selected="selected"><?php randomPicker($piezas); ?></option>
            <?php
            foreach ($piezas as $item) {
                $valuePiezas = strtolower($item);
                echo "<option value='$valuePiezas'>$item</option>";
            }
            ?>

        </select>
        <select style="width: 20vw;" name="xboarda" id="xboarda">
            <option selected="selected"><?php randomPicker($xindex); ?></option>
            <?php
            foreach ($xindex as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <select style="width: 20vw;" name="yboarda" id="yboarda">
            <option selected="selected"><?php randomPicker($yindex); ?></option>
            <?php
            foreach ($yindex as $item) {
                echo "<option value='$item'>$item</option>";
            }
            ?>
        </select>
        <br>

        <!-- <input type="text" name="xboard" id="xboard" required> -->
        <!-- <input type="number" name="yboard" id="yboard"> -->

        <input type="submit" value="VER LAS AMENAZAS POR PIEZAS">
        <hr>


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

    <h2>POSICIONES AMENAZADA 👀</h2>

    <div class="container">
        <table>
            <?php
            



            include 'funpieza.php';


            $someCount = 0;

            function makeWrite($codePosition)
            {
                
                $piezaAmenazante = new Pieza($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]));
                $piezaAmenazada = new Pieza($_GET["piezan"], transformLetra($_GET["xboarda"]), tranformNumero($_GET["yboarda"]));
                $posUser = checkPos($_GET["xboard"], $_GET["yboard"]);
                $posAme = checkPos($_GET["xboarda"], $_GET["yboarda"]);
                if ($codePosition == $posUser) {
                    if (in_array($posUser, $piezaAmenazada->checkThreats())) {
                        // GLOBAL $someCount;
                        // $someCount++;
                        // echo $someCount;
                        return "<span style='color: #08FFBE;'>*</span>
                        " . $piezaAmenazante->asciiPi() . "<span style='color: #08FFBE;'>*</span>";
                    }
                    return $piezaAmenazante->asciiPi();
                } else if ($codePosition == $posAme) {
                    if (in_array($posAme, $piezaAmenazante->checkThreats())) {
                        return "<span style='color: #08FFBE;'>*</span>" . $piezaAmenazada->asciiPi() . "<span style='color: #08FFBE;'>*</span>";
                    }

                    return $piezaAmenazada->asciiPi();
                } 
                else  if (in_array($codePosition, $piezaAmenazante->checkThreats()) && in_array($codePosition, $piezaAmenazada->checkThreats())) {

                    return "<span style='color: #CA015C'>º</span>";
                } 
                else  if (in_array($codePosition, $piezaAmenazante->checkThreats())) {

                    return "<span style='color:#9CE2F6'>*</span>";
                } 
                else if (in_array($codePosition, $piezaAmenazada->checkThreats())) {
                    return "<span style='color:#000B5A'>+</span>";
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
                    $classBoard = tweaker($classBoard);

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
                    $classBoard = tweaker($classBoard);
                }
            }
            function tweaker($classBoard)
            {
                if ($classBoard == "white-board") {

                    return $classBoard = "black-board";
                } else {

                    return $classBoard = "white-board";
                }
            }

            function checkAmenaza()
            {
                $posAme = checkPos($_GET["xboarda"], $_GET["yboarda"]);
                if ($_GET["pieza"] == "torre") {
                    if (in_array($posAme, makeTorre($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        // echo "LA TORRE EN".transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]);
                        // echo $posAme. " ";
                        echo 'LA  ' . $_GET["pieza"] . ' AMENAZA LA POSICION ' . $posAme . ' <br>';
                    } else {
                        echo "NO HAY AMENAZA ";
                    }
                } else if ($_GET["pieza"] == "alfil") {
                    if (in_array($posAme, makeAlfil($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        echo 'LA  ' . $_GET["pieza"] . ' AMENAZA LA POSICION ' . $posAme . ' <br>';
                    } else {
                        echo "NO HAY AMENAZA ";
                    }
                } else if ($_GET["pieza"] == "dama") {
                    if (in_array($posAme, makeDama($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        echo 'LA  ' . $_GET["pieza"] . ' AMENAZA LA POSICION ' . $posAme . ' <br>';
                    } else {
                        echo "NO HAY AMENAZA ";
                    }
                } else if ($_GET["pieza"] == "caballo") {
                    if (in_array($posAme, makeCaballo($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        echo 'LA  ' . $_GET["pieza"] . ' AMENAZA LA POSICION ' . $posAme . ' <br>';
                    } else {
                        echo "NO HAY AMENAZA ";
                    }
                } else if ($_GET["pieza"] == "rey") {
                    if (in_array($posAme, makeRey($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        echo 'LA  ' . $_GET["pieza"] . ' AMENAZA LA POSICION ' . $posAme . ' <br>';
                    } else {
                        echo "NO HAY AMENAZA ";
                    }
                } else if ($_GET["pieza"] == "peon") {
                    if (in_array($posAme, makePeon($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"])))) {
                        echo 'LA  ' . $_GET["pieza"] . ' AMENAZA LA POSICION ' . $posAme . ' <br>';
                    } else {
                        echo "NO HAY AMENAZA ";
                    }
                }

                // echo 'LA  '.$_GET["pieza"].' NO AMENAZA LA POSICION  '. $posAme .'<br>';

            }
            // Custom Index For Demo
            $piezasCustom = array("dama", "torre");
            $xindexCustom = array(0, 1, 2, 3, 4, 5, 6, 7);
            $yindexCustom = array(0, 1, 2, 3, 4, 5, 6, 7);

            

            if (isset($_GET["pieza"]) && isset($_GET["xboard"]) && isset($_GET["yboard"])) {
                $piezaAmenazante = new Pieza($_GET["pieza"], transformLetra($_GET["xboard"]), tranformNumero($_GET["yboard"]));
                $piezaAmenazada = new Pieza($_GET["piezan"], transformLetra($_GET["xboarda"]), tranformNumero($_GET["yboarda"]));
                $piezaAmenazante->isThreat($piezaAmenazada);
                $piezaAmenazada->isThreat($piezaAmenazante);
                // checkAmenaza();
                makeTable();
            } else {
                echo "<hr><h3>INSERTA DATOS</h3>";
            }







            ?>

        </table>
    </div>


</body>

</html>