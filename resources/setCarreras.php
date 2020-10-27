<?php
/*
    require("../controller/conexion.php");
    $query="INSERT INTO carrera VALUES(:id,:nombre,:corto,:semestres)";
    $resultado=$base->prepare($query);
    $fp = fopen("carreras.txt", "r");
    $i=1;
    while (!feof($fp)){
        $linea = fgets($fp);
        $arreglo= explode("-",$linea);
        $resultado->bindValue(":id",$i);
        $resultado->bindValue(":nombre",$arreglo[0]);
        $resultado->bindValue(":corto",$arreglo[1]);
        $resultado->bindValue(":semestres",intval($arreglo[2]));
        $resultado->execute();
        echo "Exito <br>";
        $i++;
    }
    */
?>