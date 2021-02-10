<?php
function idiom_setter($idioma)
{
    switch ($idioma) {
        case 'UK':
            setcookie("idioma", "UK");
            return "GOOD MORNING";
        case 'FR':
            setcookie("idioma", "FR");
            return "BONJOUR";
        case 'SP':
            setcookie("idioma", "SP");
            return "BUENOS DÏAS";
        case 'VACIO':
            break;
    }
}
// if(isset($_COOKIE['idioma'])){
//     idiom_setter($_COOKIE['idioma']);      
// }

if(isset($_COOKIE['idioma'])) {
    $salute = idiom_setter($_COOKIE['idioma']);
    echo($salute);
}

idiom_setter($_GET['idioma']);


?>