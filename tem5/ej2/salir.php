<?php
    session_start();

    unset($_SESSION);


    session_destroy();

    header("Location: http://localhost/tem5/ej2");

?>