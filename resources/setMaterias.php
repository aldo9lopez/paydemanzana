<?php
/*
    require("../controller/conexion.php");
    $query="INSERT INTO materia VALUES(:id,:nombre,:semestre,:carrera)";
    $resultado=$base->prepare($query);
    $fp = fopen("materias_logistica.txt", "r");
    $i=102;
    while (!feof($fp)){
        $linea = fgets($fp);
        $arreglo= explode("-",$linea);
        $resultado->bindValue(":id",$i);
        $resultado->bindValue(":nombre",$arreglo[0]);
        $resultado->bindValue(":semestre",$arreglo[1]);
        $resultado->bindValue(":carrera",intval($arreglo[2]));
        $resultado->execute();
        echo "Exito <br>";
        $i++;
    }
    */
?>