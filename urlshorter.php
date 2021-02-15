<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL SHORTER</title>
</head>

<body>
    <form method="get">
        <input type="text" name="urlToShort" id="urlToShort">
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
    $servername = "localhost";
    $user = "root";
    $password = "fooofooo";
    $myDB = "phpurlshorter";
    
    $conn = new mysqli($servername, $user, $password, $myDB);

    if(isset($_GET['eco'])){
        $urlToGo = $_GET['eco'];

        echo ($urlToGo);
        $sql_togo = "SELECT * from urls where shorted_url='".$_GET['eco']."';";
        echo("<br>".$sql_togo);
        $result_to = $conn->query($sql_togo);
        $tweak = $result_to->fetch_assoc();
        $bye_link = $tweak['original_url'];
  
        if(strlen($bye_link)>10) {
            header("Location: ".$bye_link);

        }

    }
    
    if(!isset($_GET['urlToShort'])) {
        die;

    }
    
    $newUrl = generateRandomString();
    


    $sql_query2 = "INSERT INTO urls (original_url, shorted_url) VALUES ('".$_GET['urlToShort']."','".$newUrl."')";

    $sql_fit = $conn->query($sql_query2);
    
    if($sql_fit === TRUE) {

        echo("ESTA ES TU NUEVA DIRECCIÓN <br><a href='http://localhost/urlshorter.php?eco=".$newUrl."'>http://localhost/urlshorter.php?eco=".$newUrl."</a><br>");
    }
    
    

      
      $conn->close();

    // $sql_query = "INSERT INTO urls (original_url, shorted_url) VALUES (". $_COOKIE['urlToShort'];







    // header("Location: https://google.es");

    ?>

</body>

</html>