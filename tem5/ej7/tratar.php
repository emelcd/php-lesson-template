    <?php
    session_start();

    if(isset($_POST['bajar'])) {
        $_SESSION['valor'] = $_SESSION['valor'] - 1;
        setcookie('valor', $_SESSION['valor']);
        echo($_SESSION['valor']);
    }
    if(isset($_POST['subir'])) {
        $_SESSION['valor'] = $_SESSION['valor'] + 1;
        setcookie('valor', $_SESSION['valor']);
        echo($_SESSION['valor']);
    }
    if(isset($_POST['ini'])) {
        $_SESSION['valor'] = 0;
        setcookie('valor', $_SESSION['valor']);
        echo($_SESSION['valor']);
    }

    header("Location: index.php");

?>