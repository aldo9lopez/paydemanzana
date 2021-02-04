<?php
/*
    require("../controller/conexion.php");
    $query="INSERT INTO materia VALUES(null,:nombre,:semestre,:carrera)";
    $resultado=$base->prepare($query);
    $fp = fopen("materias_tics.txt", "r");
    while (!feof($fp)){
        $linea = fgets($fp);
        $arreglo= explode("-",$linea);
        $resultado->bindValue(":nombre",$arreglo[0]);
        $resultado->bindValue(":semestre",$arreglo[1]);
        $resultado->bindValue(":carrera",intval($arreglo[2]));
        $resultado->execute();
        echo "Exito <br>";
    }
    */
?>