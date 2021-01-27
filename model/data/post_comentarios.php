<?php
    $tamano=10;
    $pagina=1;
    if(isset($_GET["pag"])){
        $pagina=$_GET["pag"];
    }
    $sql1="SELECT A.Comentario, A.Fecha, A.Hora, A.Usuario, 
    (SELECT CONCAT(B.Nombre,' ',B.Apellido) FROM usuario B WHERE B.No_control=A.Usuario) AS Nombre,
    (SELECT P.Imagen_ruta FROM usuario_presentacion P WHERE P.Usuario=A.Usuario) As Foto 
    FROM post_comentario A WHERE A.Post=:post";
    //$registros=$base->query($sql)->fetchAll((PDO::FETCH_OBJ));
    $resultado=$base->prepare($sql1);
    $resultado->bindValue(":post",$post);
    $resultado->execute();
    $num_registros=$resultado->rowCount();
    $total_paginas=ceil($num_registros/$tamano);
    $resultado->closeCursor();
    $empezar=($pagina-1)*$tamano;

    $sql2= $sql1 . " ORDER BY A.Fecha DESC, A.Hora DESC LIMIT $empezar,$tamano";

    $resultado=$base->prepare($sql2);
    $resultado->bindValue(":post",$post);
    $resultado->execute();
    $comentarios_post=$resultado->fetchAll((PDO::FETCH_OBJ));

?>