<?php
    $test_tipo = $_GET["tipo"];
    $test_nombre ="";
    $test_numero = getNumero($base,$test_tipo,$usuario);


    switch($test_tipo){
        case 1: 
            $test_nombre = "Test del amor";
            break;
        case 2: 
            $test_nombre = "Test de la mente";
            break;
        case 3: 
            $test_nombre = "Test de personal";
            break;
    }

    function getNumero($base,$test,$usuario){
        return 0;
    }

?>