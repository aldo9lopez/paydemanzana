<?php
    $verificar_test =0;
    $leyenda = "Para buscar tu media manzana llena ";

    $query="SELECT COUNT(*) FROM mm_basicos WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $count = $registro["COUNT(*)"];

    if($count==0){
        $verificar_test++;
        $leyenda.= " <b>tus datos personales</b> (signo zodiacal, redes, sociales, prefrencias)";
    }

    $query="SELECT COUNT(*) FROM mm_test1 WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $count = $registro["COUNT(*)"];

    if($count==0){
        $verificar_test++;
        if($verificar_test>1){
            $leyenda.=",";
        }
        $leyenda.=" <b>el test del corazón</b>";
    }

    $query="SELECT COUNT(*) FROM mm_test2 WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $count = $registro["COUNT(*)"];

    if($count==0){
        $verificar_test++;
        if($verificar_test>1){
            $leyenda.=",";
        }
        $leyenda.=" <b>el test de la mente</b>";
    }

    $query="SELECT COUNT(*) FROM mm_test3 WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $count = $registro["COUNT(*)"];

    if($count==0){
        $verificar_test++;
        if($verificar_test>1){
            $leyenda.=" y";
        }
        $leyenda.=" <b>el test personal</b>";
    }
?>