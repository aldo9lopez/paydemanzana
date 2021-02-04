<?php
    if(!isset($_GET["id"])){
        header("Location:../");
    }
    require("../model/data/get_profesor.php");

    $teacher = $_GET["id"];

    $registro= getProfesor($teacher,$base);

    $teachertitle = $registro["Titulo"];
    $teachername = $registro["Nombre"];
    $teachergender = $registro["Sexo"];

    $sql ="SELECT ((Aprobadas * 100) / Totales) as Porcentaje FROM (SELECT COUNT(Case WHEN A.Estatus = 'Aprobada' THEN 1 END) as Aprobadas, COUNT(*) as Totales FROM calificacion A WHERE A.Profesor = :profesor) t";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":profesor",$teacher);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $porcetaje_aprobados = $registro["Porcentaje"];
    
    if($porcetaje_aprobados!=null){
        $sql ="SELECT AVG(Estrellas) AS Promedio FROM calificacion WHERE Profesor = :profesor";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":profesor",$teacher);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        $teacher_estrellas = $registro["Promedio"];
        
        $sql = "SELECT COUNT(*) AS Manzanas FROM calificacion WHERE Profesor= :profesor AND Manzana='Buena'";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":profesor",$teacher);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        $teacher_manzanas_buenas = $registro["Manzanas"];

        $sql = "SELECT COUNT(*) AS Manzanas FROM calificacion WHERE Profesor= :profesor AND Manzana='Mala'";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":profesor",$teacher);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        $teacher_manzanas_malas = $registro["Manzanas"];

        $sql = "SELECT Count(*) as Veces, A.Materia As Id, (SELECT B.Nombre_materia FROM materia B WHERE B.Id_materia = A.Materia) As Nombre 
        FROM calificacion A WHERE A.Profesor = :profesor AND EXISTS(SELECT C.Id_materia FROM materia C WHERE A.Materia=C.Id_materia AND C.Carrera=$carrera) 
        GROUP BY A.Materia ORDER BY Veces DESC LIMIT 4";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":profesor",$teacher);
        $resultado->execute();
        $resultados_materias=$resultado->fetchAll((PDO::FETCH_OBJ));

        $tamano=10;
        $pagina=1;
        if(isset($_GET["pag"])){
            $pagina=$_GET["pag"];
        }
        $sql1="SELECT A.Estrellas, A.Opinion, (SELECT B.Nombre_materia FROM materia B WHERE A.Materia=B.Id_materia) 
        as Materia FROM calificacion A WHERE A.Profesor = :profesor";
        //$registros=$base->query($sql)->fetchAll((PDO::FETCH_OBJ));
        $resultado=$base->prepare($sql1);
        $resultado->bindValue(":profesor",$teacher);
        $resultado->execute();
        $num_registros=$resultado->rowCount();
        $total_paginas=ceil($num_registros/$tamano);
        $resultado->closeCursor();
        $empezar=($pagina-1)*$tamano;

        $sql2= $sql1 . " ORDER BY Id_calificacion DESC LIMIT $empezar,$tamano";

        $resultado=$base->prepare($sql2);
        $resultado->bindValue(":profesor",$teacher);
        $resultado->execute();
        $comentarios_general=$resultado->fetchAll((PDO::FETCH_OBJ));

        require_once("../model/data/get_comentarios.php");

        $comentarios_5estrellas = getComentarios($teacher,$base,5);
        $comentarios_4estrellas = getComentarios($teacher,$base,4);
        $comentarios_3estrellas = getComentarios($teacher,$base,3);
        $comentarios_2estrellas = getComentarios($teacher,$base,2);
        $comentarios_1estrellas = getComentarios($teacher,$base,1);

    }
    
?>