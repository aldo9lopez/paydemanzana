<?php
/*
    require("../controller/conexion.php");
    $query="INSERT INTO profesor VALUES(:id,:titulo,:nombre,:sexo)";
    $resultado=$base->prepare($query);
    $fp = fopen("profesores.txt", "r");
    $i=1;
    while (!feof($fp)){
        $linea = fgets($fp);
        $arreglo= explode("-",$linea);
        $resultado->bindValue(":id",$i);
        $resultado->bindValue(":titulo",$arreglo[0]);
        $resultado->bindValue(":nombre",$arreglo[1]);
        $resultado->bindValue(":sexo",intval($arreglo[2]));
        $resultado->execute();
        echo "Exito <br>";
        $i++;
    }*/
?>