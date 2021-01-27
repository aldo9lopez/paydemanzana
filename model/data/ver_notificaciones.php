<?php
    $tamano=10;
    $pagina=1;
    if(isset($_GET["pag"])){
        $pagina=$_GET["pag"];
    }
    $sql1="SELECT * FROM post_notificacion WHERE Usuario=:usuario";
    //$registros=$base->query($sql)->fetchAll((PDO::FETCH_OBJ));
    $resultado=$base->prepare($sql1);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $num_registros=$resultado->rowCount();
    $total_paginas=ceil($num_registros/$tamano);
    $resultado->closeCursor();
    $empezar=($pagina-1)*$tamano;

    $sql2= $sql1 . " ORDER BY Fecha DESC, Hora DESC LIMIT $empezar,$tamano";

    $resultado=$base->prepare($sql2);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $lista_notificaciones=$resultado->fetchAll((PDO::FETCH_OBJ));

?>