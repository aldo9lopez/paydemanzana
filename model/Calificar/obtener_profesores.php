<?php
    $sql = "SELECT * FROM profesor";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $registros=$resultado->fetchAll((PDO::FETCH_OBJ));

?>