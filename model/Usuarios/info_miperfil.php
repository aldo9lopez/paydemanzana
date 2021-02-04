<?php
    $sql="SELECT Descripcion FROM usuario_presentacion WHERE Usuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $descripcion = $registro["Descripcion"];

    $sql="SELECT Anio_ingreso, Sexo, Nombre, Apellido FROM usuario WHERE No_control=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $anio_ingreso = $registro["Anio_ingreso"];

    $resultado = numeroGeneral($usuario,$base);
    
    $pop_gen_num = $resultado["Numero"] ?? null;
    
    $resultado = numeroCarrera($usuario,$carrera,$base);
    
    $pop_car_num = $resultado["Numero"] ?? null;

?>