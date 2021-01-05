<?php
    $sql="SELECT COUNT(*) as Materias FROM (SELECT DISTINCT(Materia) FROM calificacion WHERE Usuario = :usuario AND EXISTS(SELECT Id_materia from materia WHERE Semestre = $i AND Carrera = :carrera)) As Distingir";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->bindValue(":carrera",$carrera);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $materias_calif = $registro["Materias"];

    $sql="SELECT COUNT(*) as Materias FROM materia WHERE Semestre = $i AND Carrera=:carrera";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":carrera",$carrera);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $materias_tot = $registro["Materias"];

?>