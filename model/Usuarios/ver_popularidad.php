<?php
    $resultado = numeroGeneral($usuario,$base);
    $pos_general = $resultado["Numero"] ?? null;
    $resultado = numeroCarrera($usuario,$carrera,$base);
    $pos_carrera = $resultado["Numero"] ?? null;

    $resultado = totalGeneral($base);
    $total_general = $resultado["Total"] ?? null;
    $resultado = totalCarrera($carrera,$base);
    $total_carrera = $resultado["Total"] ?? null;

    if($pos_general==null){
        $pos_general=$total_general;
    }

    if($pos_carrera==null){
        $pos_carrera=$total_carrera;
    }

    $stat_carrera = "No tan popular";
    $stat_car_num=3;

    switch($pos_carrera){
        case ($pos_carrera<=($total_carrera/3)):
            $stat_carrera = "Popular";
            $stat_car_num=1;
            break;
        case ($pos_carrera<=($total_carrera*2/3)):
            $stat_carrera = "Algo popular";
            $stat_car_num=2;
            break;
    }

    $stat_general = "No tan popular";
    $stat_gen_num=3;

    switch($pos_general){
        case ($pos_general<=($total_general/3)):
            $stat_general = "Popular";
            $stat_gen_num=1;
            break;
        case ($pos_general<=($total_general*2/3)):
            $stat_general = "Algo popular";
            $stat_gen_num=2;
            break;
    }

?>