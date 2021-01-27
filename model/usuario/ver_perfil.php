<?php
    
    $sql="SELECT Nombre, Apellido, Carrera FROM usuario WHERE No_control=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $profilename = $registro["Nombre"] . " " . $registro["Apellido"];
    $carrera = $registro["Carrera"];

    $sql="SELECT Imagen_ruta FROM usuario_presentacion WHERE Usuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $profileimage = $registro["Imagen_ruta"];

    $sql="SELECT * FROM carrera WHERE Id_carrera=:carrera";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":carrera",$carrera);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $profilecareer = $registro["Nombre_corto"];
    $careername = $registro["Nombre_carrera"];
    $careersem = $registro["Semestres"];

    $sql="SELECT COUNT(*) FROM post_notificacion WHERE Usuario=:usuario AND Visto=0";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $notifications = $registro["COUNT(*)"];

?>