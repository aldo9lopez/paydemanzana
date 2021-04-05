<?php
    $query="SELECT COUNT(*) FROM mm_basicos WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_count = $registro["COUNT(*)"];
    $signo_z='none';
    $redes_s= "Fb: \nIg:";
    $pref = "none";

    if($mm_count>0){
        $query="SELECT Signo_zodiacal, Redes, Preferencias FROM mm_basicos WHERE Usuario=:usuario";
        $resultado=$base->prepare($query);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        $signo_z = $registro["Signo_zodiacal"];
        $redes_s = $registro["Redes"];
        $pref = $registro["Preferencias"];

    }

?>