    <?php


    if(isset($_POST['bajar'])) {
        $_COOKIE['valor'] = $_COOKIE['valor'] - 1;
        echo($_COOKIE['valor']);
    }
    if(isset($_POST['subir'])) {
        $_COOKIE['valor'] = $_COOKIE['valor'] + 1;
        echo($_COOKIE['valor']);
    }
    if(isset($_POST['ini'])) {
        $_COOKIE['valor'] = 0;
        echo($_COOKIE['valor']);
    }
    setcookie('valor', $_COOKIE['valor']);

    header("Location: index.php");

?>