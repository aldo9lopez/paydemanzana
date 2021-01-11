<?php
    if(!isset($_GET["buscar"])){
        header("location:../");
    }
    if(!isset($_GET["buscar-tipo"])){
        header("location:../");
    }
    $search = $_GET["buscar"];
    $searchtype = $_GET["buscar-tipo"];

    $query_tabla = "usuario";
    $query_match = "Nombre, Apellido";
    $query_add= " LIMIT 20";
    $default_select=0;
    if($searchtype=="materias"){
        $query_tabla = "materia";
        $query_match ="Nombre_materia";
        $query_add=" AND Carrera = $carrera";
        $default_select=1;
    }else if($searchtype=="profesores"){
        $query_tabla = "profesor";
        $query_match ="Nombre";
        $default_select=2;
        $query_add= "";
    }

    $sql = "SELECT * FROM $query_tabla WHERE MATCH($query_match) AGAINST (:search)$query_add";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":search",$search);
    $resultado->execute();
    $resultados_busqueda=$resultado->fetchAll((PDO::FETCH_OBJ));


?>