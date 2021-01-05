<?php
    $sql="";
    if(!$calificadas){
        $sql = "SELECT * FROM materia A WHERE A.Carrera = $carrera and A.Semestre = $semestre AND NOT EXISTS(Select Materia From calificacion B Where A.Id_materia = B.Materia AND B.Usuario=:usuario)";
    }else{
        $sql = "SELECT * FROM materia A WHERE A.Carrera = $carrera and A.Semestre = $semestre AND EXISTS(Select Materia From calificacion B Where A.Id_materia = B.Materia AND B.Usuario=:usuario)";
    }
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registros=$resultado->fetchAll((PDO::FETCH_OBJ));
    echo '<table class="materias">';
    foreach($registros as $materias){
        echo '<tr>';
        echo "<td>$materias->Nombre_materia</td>";
        echo "<td>";
        if(!$calificadas){
            echo "<a href=\"calificar?materia=$materias->Id_materia\" class=\"no-calif\">Calificar";
        }else{
            echo "<a href=\"calificar?materia=$materias->Id_materia\" class=\"calif\">Editar";
        }
        echo "</a>";
        echo "</td>";
        echo '</tr>';
    }
    echo "</table>";
?>