<?php
    $test_tipo = $_GET["tipo"];
    $test_nombre ="";
    $test_bd="mm_test1";


    switch($test_tipo){
        case 1: 
            $test_nombre = "Test del amor";
            $test_bd="mm_test1";
            break;
        case 2: 
            $test_nombre = "Test de la mente";
            $test_bd="mm_test2";
            break;
        case 3: 
            $test_nombre = "Test de personal";
            $test_bd="mm_test3";
            break;
    }

    $res_q1 =0;
    $res_q2 =0;
    $res_q3 =0;
    $res_q4 =0;
    $res_q5 =0;
    $res_q6 =0;
    $res_q7 =0;
    $res_q8 =0;
    $res_q9 =0;
    $res_q10 =0;



    $query="SELECT COUNT(*) FROM $test_bd WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $res_mov = $registro["COUNT(*)"];

    if($res_mov>0){
        $query="SELECT * FROM $test_bd WHERE Usuario=:usuario";
        $resultado=$base->prepare($query);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        $res_q1 =$registro["Q1"];
        $res_q2 =$registro["Q2"];
        $res_q3 =$registro["Q3"];
        $res_q4 =$registro["Q4"];
        $res_q5 =$registro["Q5"];
        $res_q6 =$registro["Q6"];
        $res_q7 =$registro["Q7"];
        $res_q8 =$registro["Q8"];
        $res_q9 =$registro["Q9"];
        $res_q10 =$registro["Q10"];

    }

?>