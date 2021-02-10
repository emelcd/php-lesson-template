<?php

    function saludarSegunIdioma($idioma) {
        setcookie('idiomaCookie', $idioma, time()+60);

        switch ($idioma) {
            case 'SP':
                echo("BUENOS DÍAS");
                break;
            case 'FR':
                echo("BONJJOUR");
                break;
            case 'UK':
                echo("GOOD MORNING");
                break;
            
            case 'VACIO':
                if(isset($_COOKIE['idiomaCookie'])) {
                    saludarSegunIdioma($_COOKIE['idiomaCookie']);
                    
                } else {
                    echo("BUENOS DÍAS");
            }
        }
    }
    saludarSegunIdioma($_GET['idioma']);

?>