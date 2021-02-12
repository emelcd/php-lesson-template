<?php
    session_start();

    
    
    $newUser = $_POST['newUser'];
    $newPass = $_POST['newPassword'];

    $_SESSION['dataLogins'][$newUser] = hash('sha1', $newPass);
    

    $dataLogins[$newUser] = [hash('sha1', $newPass)];

    

    foreach ($_SESSION['dataLogins'] as $logins => $value) {
        echo("<br>".$logins."<br>".$value);
    }

    


?>

<a href="index.php">VUELVE</a>



