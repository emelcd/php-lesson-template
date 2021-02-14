<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>

<body>
    <style>
        table {
            margin: auto;
            
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;


        }

        td,tr,th {
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
        }
        .title {
            text-align: center;
        }
    </style>
    <h1 class="title">MySQL TABLE VIEWER</h1>
    <form method="get">
        <input type="text" name="tableName" id="tableName">
        <input type="submit">DALE
    </form>

    <?php



    $servername = "localhost";
    $user = "root";
    $password = "foofoo";
    $myDB = "sakila";

    if (isset($_GET['tableName'])) {
        $conn = new mysqli($servername, $user, $password, $myDB);

        if ($conn->connect_error) {
            die("Connection FAIL" . $conn->connect_error);
        }


        $sql = "SELECT * FROM " . $_GET['tableName'] . " LIMIT 20";


        $result =  $conn->query($sql);
        $info_campo = mysqli_fetch_fields($result);
        echo ("<h2 style='text-align:center;margin:auto;'>".$_GET['tableName']."</h2><div class='fixing'><table><tr>");

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

        echo("<h1 style='text-align:center'>AVALIBLE TABLES</h1>");

        $sql_showtables="SHOW TABLES";
        $result2 = $conn->query($sql_showtables);
        echo("<div class='fixing'><table>");
        foreach ($result2 as $table) {
            echo("<tr>");
            foreach($table as $table_entry) {
                echo("<th>".$table_entry."</th>");
            }
            echo("</tr>");
        }
        echo("</table></div>");
    };
    ?>

</body>

</html>