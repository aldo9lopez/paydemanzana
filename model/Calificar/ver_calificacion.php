<?php
    $sql="SELECT COUNT(*) as Calif FROM calificacion WHERE Materia=:materia AND Usuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$materia);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $reviews = $registro["Calif"];

?>