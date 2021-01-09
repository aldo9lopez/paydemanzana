<?php
    require_once("../controller/cript_user.php");
    $sql = "SELECT * FROM calificacion WHERE Usuario=:usuario AND Materia=:materia";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$materia);
    $resultado->bindValue(":usuario",encriptar($usuario));
    $resultado->execute();
    $filas=$resultado->fetchAll((PDO::FETCH_OBJ));

?>