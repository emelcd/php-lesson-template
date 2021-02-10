<?php
    session_start();

    unset($_SESSION['arrayNombres']);


    session_destroy();

    header("Location: http://localhost/tem5/ej4");
?>