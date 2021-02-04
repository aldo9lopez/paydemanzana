<?php
    if(!isset($_GET["id"])){
        header("Location:../");
    }
    $subject = $_GET["id"];

    $sql="SELECT * FROM materia WHERE Id_materia=:materia";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$subject);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $subjectname = $registro["Nombre_materia"];
    $subjectsem = $registro["Semestre"];
    $subjectcareer = $registro["Carrera"];

    if($subjectcareer!=$carrera){
        header("Location:../");
    }

    $sql ="SELECT ((Aprobadas * 100) / Totales) as Porcentaje FROM (SELECT COUNT(Case WHEN A.Estatus = 'Aprobada' THEN 1 END) as Aprobadas, COUNT(*) as Totales FROM calificacion A WHERE A.Materia = :materia) t";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$subject);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $porcetaje_aprobados = $registro["Porcentaje"];

    if($porcetaje_aprobados!=null){
        require_once("../model/data/get_profesor.php");

        $sql = "SELECT SUM(CASE WHEN Manzana = 'Buena' THEN 1 END) As Manzanas, Profesor FROM calificacion WHERE Materia = :materia GROUP BY Profesor ORDER BY Manzanas DESC LIMIT 1";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));
    
        $mejor_profesor = $registro["Profesor"];
        $mejor_profesor_manzanas = $registro["Manzanas"];
        $registro = getProfesor($mejor_profesor,$base);
        $mejor_profesor_titulo = $registro["Titulo"];
        $mejor_profesor_nombre = $registro["Nombre"];

        $sql = "SELECT SUM(CASE WHEN Manzana = 'Mala' THEN 1 END) As Manzanas, Profesor FROM calificacion WHERE Materia = :materia GROUP BY Profesor ORDER BY Manzanas DESC LIMIT 1";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));
    
        $peor_profesor = $registro["Profesor"];
        $peor_profesor_manzanas = $registro["Manzanas"];
        $registro = getProfesor($peor_profesor,$base);
        $peor_profesor_titulo = $registro["Titulo"];
        $peor_profesor_nombre = $registro["Nombre"];

        $sql = "SELECT Count(*) as Veces, A.Profesor As Id, (SELECT concat_ws(' ', B.Titulo, B.Nombre) FROM profesor B WHERE A.Profesor = B.Id_profesor) As Nombre FROM calificacion A WHERE A.Materia = :materia GROUP BY A.Profesor ORDER BY Veces DESC LIMIT 4";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $resultados_profesores=$resultado->fetchAll((PDO::FETCH_OBJ));

        $tamano=10;
        $pagina=1;
        if(isset($_GET["pag"])){
            $pagina=$_GET["pag"];
        }
        $sql1="SELECT A.Id_calificacion As Calif, A.Profesor as Profesor, A.Opinion as Opinion , (SELECT concat_ws(' ', B.Titulo, B.Nombre) FROM profesor B WHERE B.Id_profesor=A.Profesor) as Nombre FROM calificacion A WHERE A.Materia = :materia";
        //$registros=$base->query($sql)->fetchAll((PDO::FETCH_OBJ));
        $resultado=$base->prepare($sql1);
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $num_registros=$resultado->rowCount();
        $total_paginas=ceil($num_registros/$tamano);
        $resultado->closeCursor();
        $empezar=($pagina-1)*$tamano;

        $sql2= $sql1 . " ORDER BY Calif DESC LIMIT $empezar,$tamano";

        $resultado=$base->prepare($sql2);
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $resultados_opiniones=$resultado->fetchAll((PDO::FETCH_OBJ));
    }


?>