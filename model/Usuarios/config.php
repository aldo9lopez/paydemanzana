<?php
    $sql="SELECT Anio_ingreso, Sexo, Nombre, Apellido FROM usuario WHERE No_control=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $anio_ingreso = $registro["Anio_ingreso"];
    $perfil_sexo = $registro["Sexo"];
    $perfil_name = $registro["Nombre"];
    $perfil_apellido = $registro["Apellido"];


?>