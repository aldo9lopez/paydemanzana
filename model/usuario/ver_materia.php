<?php

    $sql="SELECT * FROM materia WHERE Id_materia=:materia";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$materia);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $subjectname = $registro["Nombre_materia"];
    $subjectsem = $registro["Semestre"];
    $subjectcareer = $registro["Carrera"];

    

?>