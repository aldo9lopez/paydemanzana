<?php
    if(!isset($_GET["id"])){
        header("location:../");
    }
    $post = $_GET["id"];

    $sql="SELECT A.Comentario, A.Fecha, A.Hora, A.Imagen_ruta,A.Usuario, 
    (SELECT CONCAT(B.Nombre,' ',B.Apellido) FROM usuario B WHERE B.No_control=A.Usuario) AS Nombre,
    (SELECT P.Imagen_ruta FROM usuario_presentacion P WHERE P.Usuario=A.Usuario) As Foto,
    (SELECT COUNT(*) FROM post_manzana M WHERE M.Post = A.Id_post) AS Manzanas,
    (SELECT COUNT(*) FROM post_comentario H WHERE H.Post=A.Id_post) AS Comentarios,
    (SELECT COUNT(*) FROM post_manzana O WHERE O.Post=A.Id_post AND O.Usuario = :usuario) AS Man FROM post A
    WHERE A.Id_post = :post";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->bindValue(":post",$post);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $post_texto= $registro["Comentario"];
    $post_fecha= $registro["Fecha"];
    $post_hora= $registro["Hora"];
    $post_imagen= $registro["Imagen_ruta"];
    $post_usuario = $registro["Usuario"];
    $post_nombre = $registro["Nombre"];
    $post_foto_perfil = $registro["Foto"];
    $post_nmanzanas = $registro["Manzanas"];
    $post_ncomentarios = $registro["Comentarios"];
    $post_man = $registro["Man"];

    $post_txt_corto="";
    if(strlen($post_texto)>40){
        $post_txt_corto = substr($post_texto,0,39) . "...";
    }else{
        $post_txt_corto = $post_texto;
    }

    if($post_usuario==$usuario){
        $query="UPDATE post_notificacion SET Visto=1 WHERE Post = :post AND Usuario = :usuario";
        $resultado=$base->prepare($query);
        $resultado->bindValue(":post",$post);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->execute();

        $sql="SELECT COUNT(*) FROM post_notificacion WHERE Usuario=:usuario AND Visto=0";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->execute();
        $registro=$resultado->fetch((PDO::FETCH_ASSOC));

        $notifications = $registro["COUNT(*)"];
    }

?>