<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>

<body>
    <style>
        * {
            font-family: monospace;
            font-size: 1.1rem;
        }

        table {
            position: relative;
            margin: auto;
            display: block;
            height: 500px;
            overflow-y: scroll;
            padding: 1.5rem;

            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;


        }

        td,
        tr,
        th {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        form {
            position: sticky;
            text-align: center;
        }

        .fixing {
            overflow-x: auto;
            overflow-y: visible;
        }

        .title {
            text-align: center;
        }

        .fixedlist {
            text-align: justify;
            margin: auto;
            width: 30%;


        }
    </style>
    <h1 class="title">MySQL TABLE VIEWER</h1>
    <form method="get">
        <input type="text" name="tableName" id="tableName" placeholder="Nombre de La Tabla" value="film">
        <input type="number" name="viewCount" id="viewCount" value="50">
        <input type="submit">DALE
    </form>

    <?php



    $servername = "localhost";
    $user = "root";
    $password = "-.,asd";
    $myDB = "sakila";


    $conn = new mysqli($servername, $user, $password, $myDB);



    if ($conn->connect_error) {
        die("Connection FAIL" . $conn->connect_error);
        exit;
    }


    if (isset($_GET['tableName'])) {



        $sql = "SELECT * FROM " . $_GET['tableName'] . " LIMIT " . $_GET['viewCount'];


        $result =  $conn->query($sql);
        $info_campo = mysqli_fetch_fields($result);
        echo ("<h2 style='text-align:center;margin:auto;'>" . $_GET['tableName'] . "</h2><div class='fixing'><table><tr>");

        foreach ($info_campo as $campo) {
            echo ("<th>" . $campo->name) . "</th>";
        }
        echo ("</tr>");

        foreach ($result as $newEntry) {
            echo ("<tr>");
            foreach ($newEntry as $auxC) {
                echo ("<th>" . $auxC . "</th>");
            }
            echo ("</tr>");
        }

        echo ("</table></div>");
    };
    echo ("<div class='fixedlist'><h1 style='text-align:center'>AVALIBLE TABLES (in)-><span style='color:blue;'> " . $myDB . "</span></h1>");
    $sql_showtables = "SHOW TABLES";
    $result2 = $conn->query($sql_showtables);
    foreach ($result2 as $table) {

        foreach ($table as $table_entry) {
            echo ("<li>");
            echo ($table_entry);
            echo ("</li>");
        }
    }
    echo ("</div>")
    ?>

</body>

</html>