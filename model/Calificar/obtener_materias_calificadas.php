<?php
    require_once("../controller/cript_user.php");
    $sql="SELECT COUNT(*) as Materias FROM (SELECT DISTINCT(A.Materia) FROM calificacion A WHERE A.Usuario = :usuario AND EXISTS(SELECT B.Id_materia from materia B WHERE  A.Materia=B.Id_materia AND B.Semestre = $i AND B.Carrera = :carrera)) As Distingir";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",encriptar($usuario));
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