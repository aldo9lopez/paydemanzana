<?php
    $tamano=10;
    $pagina=1;
    if(isset($_GET["pag"])){
        $pagina=$_GET["pag"];
    }
    $sql1="SELECT A.Id_post, A.Comentario, A.Fecha, A.Hora, A.Imagen_ruta,A.Usuario, 
    (SELECT CONCAT(B.Nombre,' ',B.Apellido) FROM usuario B WHERE B.No_control=A.Usuario) AS Nombre,
    (SELECT P.Imagen_ruta FROM usuario_presentacion P WHERE P.Usuario=A.Usuario) As Foto,
    (SELECT COUNT(*) FROM post_manzana M WHERE M.Post = A.Id_post) AS Manzanas,
    (SELECT COUNT(*) FROM post_comentario H WHERE H.Post=A.Id_post) AS Comentarios,
    (SELECT COUNT(*) FROM post_manzana O WHERE O.Post=A.Id_post AND O.Usuario = :usuario) AS Man FROM post A WHERE A.Usuario=:perfil";
    //$registros=$base->query($sql)->fetchAll((PDO::FETCH_OBJ));
    $resultado=$base->prepare($sql1);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->bindValue(":perfil",$perfil_usuario);
    $resultado->execute();
    $num_registros=$resultado->rowCount();
    $total_paginas=ceil($num_registros/$tamano);
    $resultado->closeCursor();
    $empezar=($pagina-1)*$tamano;

    $sql2= $sql1 . " ORDER BY A.Fecha DESC, A.Hora DESC LIMIT $empezar,$tamano";

    $resultado=$base->prepare($sql2);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->bindValue(":perfil",$perfil_usuario);
    $resultado->execute();
    $posts_general=$resultado->fetchAll((PDO::FETCH_OBJ));

?>