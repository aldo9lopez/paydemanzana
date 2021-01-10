<?php
    $sql="SELECT Nombre_corto FROM carrera WHERE Id_carrera=:carrera";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":carrera",$result->Carrera);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $resultado_carrera = $registro["Nombre_corto"];

    $sql="SELECT Imagen_ruta FROM usuario_presentacion WHERE Usuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$result->No_control);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $resultado_imagen = $registro["Imagen_ruta"];

?>