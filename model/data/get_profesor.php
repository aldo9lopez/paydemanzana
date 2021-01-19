<?php
    function getProfesor($id,$base){
        $sql ="SELECT * FROM profesor WHERE Id_profesor=:id";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":id",$id);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        return $registro;
    }

?>