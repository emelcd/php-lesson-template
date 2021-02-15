    <?php


    if(isset($_POST['bajar'])) {
        $_COOKIE['valor'] = $_COOKIE['valor'] - 1;
    }
    if(isset($_POST['subir'])) {
        $_COOKIE['valor'] = $_COOKIE['valor'] + 1;
    }
    if(isset($_POST['ini'])) {
        $_COOKIE['valor'] = 0;
    }
    setcookie('valor', $_COOKIE['valor']);

    header("Location: index.php");

?>