<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL SHORTER</title>
</head>

<body>
<style>
* {
    font-family: monospace;
    font-size: 1.2em;
    margin: 0 1rem 0 1rem;
}
</style>
    <form method="get">
        <input style="width:100%;"type="text" name="urlToShort" id="urlToShort">
        <input type="text" name="descriptionU" id="descriptionU" placeholder="description">
        <input type="submit">
    </form>
    <?php
    function generateRandomString($length = 9)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function createConnection($servername = "localhost", $user = "root", $password = "foofoo", $myDB = "phpurlshorter")
    {
        $conn = new mysqli($servername, $user, $password, $myDB);
        return $conn;
    }
    $conn = createConnection("localhost", "root", "foofoo", "phpurlshorter");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $url_shortcut = "http://localhost/urlshorter.php?eco=";
    function redirecterReady($linkbye, $conn)
    {
        $sql_togo = "SELECT * from urls where shorted_url='" . $linkbye . "';";
        $result_to = $conn->query($sql_togo);
        $tweak = $result_to->fetch_assoc();
        $bye_link = $tweak['original_url'];
        if (strlen($bye_link) > 10) {
            header("Location: " . $bye_link);
        } else {
            echo ("URL DEMASIADO CORTA");
        }
    }

    if (isset($_GET['eco'])) {
        redirecterReady($_GET['eco'], $conn);
    }

    if (!isset($_GET['urlToShort']) && $_GET['urlToShort'] != "") {
        die;
    }

    function setNewRegiser() {

    }

    $newUrl = generateRandomString();


    $sql_control = $conn->query("SELECT original_url, shorted_url from urls where original_url = '" . $_GET['urlToShort'] . "';");

    $tweak3 = $sql_control->fetch_assoc();
    if(isset($tweak3['original_url'])){
        if (strlen($tweak3['original_url']) > 0) {
            echo ("YA EXISTIO");
            echo ("<br><a href='" .$url_shortcut. $tweak3['shorted_url'] . "'>" .$url_shortcut. $tweak3['shorted_url'] . "</a>");
            die;
        }

    }

    if (strlen($_GET['urlToShort']) > 10) {
        $sql_query2 = "INSERT INTO urls (original_url, shorted_url) VALUES ('" . $_GET['urlToShort'] . "','" . $newUrl . "')";

        $sql_fit = $conn->query($sql_query2);

        if ($sql_fit === TRUE) {

            echo ("ESTA ES TU NUEVA DIRECCIÓN <br><a href='" .$url_shortcut. $newUrl . "'>" .$url_shortcut. $newUrl . "</a><br><br>");
        }
    } else {
        echo ("DIRECCION NO VALIDA<br><br>");
    }



    $avalible = $conn->query("SELECT * FROM urls");
    $tweak2 = $avalible->fetch_assoc();
    foreach ($avalible as $link) {
        echo ("<li><a href='http://localhost/urlshorter.php?eco=" . $link['shorted_url'] . "'>" . $link['shorted_url'] . "</li>");
    }
    $conn->close();
    $_GET['urlToShort'] = "";

    ?>

</body>

</html>