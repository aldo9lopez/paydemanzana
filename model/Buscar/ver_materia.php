<?php
    if(!isset($_GET["id"])){
        header("location:../");
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
        header("location:../");
    }

    $sql ="SELECT ((Aprobadas * 100) / Totales) as Porcentaje FROM (SELECT COUNT(Case WHEN A.Estatus = 'Aprobada' THEN 1 END) as Aprobadas, COUNT(*) as Totales FROM calificacion A WHERE A.Materia = :materia) t";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$subject);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $porcetaje_aprobados = $registro["Porcentaje"];

    if($porcetaje_aprobados!=null){
        $sql = "SELECT SUM(CASE WHEN Manzana = 'Buena' THEN 1 END) As Manzanas, Profesor FROM calificacion WHERE Materia = :materia GROUP BY Profesor ORDER BY Manzanas DESC LIMIT 1";
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));
    
        $mejor_profesor = $registro["Profesor"];
        $mejor_profesor_manzanas = $registro["Manzana"];

        $sql = "SELECT SUM(CASE WHEN Manzana = 'Mala' THEN 1 END) As Manzanas, Profesor FROM calificacion WHERE Materia = :materia GROUP BY Profesor ORDER BY Manzanas DESC LIMIT 1";
        $resultado->bindValue(":materia",$subject);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));
    
        $peor_profesor = $registro["Profesor"];
        $peor_profesor_manzanas = $registro["Manzana"];
    }


?>