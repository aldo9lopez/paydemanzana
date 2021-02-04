<?php
    if(!isset($_GET["id"])){
        echo '<script> window.location.replace("../")</script>';
    }
    $perfil_usuario = $_GET["id"];

    if($perfil_usuario==$usuario){
        echo '<script> window.location.replace("miperfil")</script>';
    }

    $sql ="SELECT Nombre, Apellido, Carrera, Anio_ingreso FROM usuario WHERE No_control=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$perfil_usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $perfil_nombre = $registro["Nombre"] . " " . $registro["Apellido"];
    $perfil_carrera = $registro["Carrera"];
    $perfil_ingreso = $registro["Anio_ingreso"];

    $sql ="SELECT Imagen_ruta, Descripcion FROM usuario_presentacion WHERE Usuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$perfil_usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $perfil_imagen = $registro["Imagen_ruta"];
    $perfil_descripcion = $registro["Descripcion"];

    $sql ="SELECT Nombre_carrera, Nombre_corto FROM carrera WHERE Id_carrera=:carrera";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":carrera",$perfil_carrera);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $perfil_carrera_nombre = $registro["Nombre_carrera"];
    $perfil_carrera_corto = $registro["Nombre_corto"];

    
    require_once("../model/data/popularidad.php");

    $resultado = numeroGeneral($perfil_usuario,$base);
    
    $pop_gen_num = $resultado["Numero"] ?? null;
    
    $resultado = numeroCarrera($perfil_usuario,$perfil_carrera,$base);
    
    $pop_car_num = $resultado["Numero"] ?? null;

?>