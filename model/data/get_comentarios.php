<?php

    function getComentarios($profesor,$base,$estrellas){
        $sql="SELECT A.Estrellas,A.Opinion, (SELECT B.Nombre_materia FROM materia B WHERE A.Materia=B.Id_materia) 
        as Materia FROM calificacion A WHERE A.Profesor = :profesor AND A.Estrellas=:estrellas ORDER BY A.Id_calificacion DESC LIMIT 10";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":profesor",$profesor);
        $resultado->bindValue(":estrellas",$estrellas);
        $resultado->execute();
        return $resultado->fetchAll((PDO::FETCH_OBJ));
    }

?>