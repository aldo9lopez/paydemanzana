<?php


    function numeroGeneral($usuario,$base){
        $sql="SELECT n.Numero, n.Usuario, n.Indice FROM 
        (SELECT @numero:=@numero+1 AS Numero, u.Usuario, u.Indice FROM (SELECT t.Usuario, 
         (((SELECT COUNT(*) FROM post_manzana m WHERE EXISTS(SELECT p.Id_post FROM post p WHERE p.Id_post=m.Post AND p.Usuario=t.Usuario))/
         (SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)) + ((SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)/4)) AS Indice
         FROM post t GROUP BY t.Usuario ORDER BY Indice DESC) u ,(SELECT @numero:=0)z )n  WHERE n.Usuario = :usuario";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->execute();
        return $resultado->fetch((PDO::FETCH_ASSOC));
    }

    function numeroCarrera($usuario,$carrera,$base){
        $sql="SELECT n.Numero, n.Usuario, n.Indice FROM 
        (SELECT @numero:=@numero+1 AS Numero, u.Usuario, u.Indice FROM (SELECT  t.Usuario, 
        (((SELECT COUNT(*) FROM post_manzana m WHERE EXISTS(SELECT p.Id_post FROM post p WHERE p.Id_post=m.Post AND p.Usuario=t.Usuario))/
        (SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)) + ((SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)/4)) AS Indice
        FROM post t WHERE EXISTS(SELECT o.No_control FROM usuario o WHERE t.Usuario=o.No_control AND o.Carrera=:carrera) 
        GROUP BY t.Usuario ORDER BY Indice DESC)u ,(SELECT @numero:=0)z )n WHERE n.Usuario = :usuario";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->bindValue(":carrera",$carrera);
        $resultado->execute();
        return $resultado->fetch((PDO::FETCH_ASSOC));
    }

    function totalGeneral($base){
        $sql="SELECT COUNT(*) AS Total FROM (SELECT t.Usuario, 
        (((SELECT COUNT(*) FROM post_manzana m WHERE EXISTS(SELECT p.Id_post FROM post p WHERE p.Id_post=m.Post AND p.Usuario=t.Usuario))/
        (SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)) + ((SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)/4)) AS Indice
        FROM post t GROUP BY t.Usuario ORDER BY Indice DESC) n ";
        $resultado=$base->prepare($sql);
        $resultado->execute();
        return $resultado->fetch((PDO::FETCH_ASSOC));
    }

    function totalCarrera($carrera,$base){
        $sql="SELECT COUNT(*) AS Total FROM (SELECT t.Usuario, 
        (((SELECT COUNT(*) FROM post_manzana m WHERE EXISTS(SELECT p.Id_post FROM post p WHERE p.Id_post=m.Post AND p.Usuario=t.Usuario))/ 
        (SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)) + ((SELECT COUNT(*) FROM post a WHERE a.Usuario=t.Usuario)/4)) AS Indice 
        FROM post t WHERE EXISTS(SELECT o.No_control FROM usuario o WHERE t.Usuario=o.No_control AND o.Carrera=:carrera) GROUP BY t.Usuario ORDER BY Indice DESC) n ";
        $resultado=$base->prepare($sql);
        $resultado->bindValue(":carrera",$carrera);
        $resultado->execute();
        return $resultado->fetch((PDO::FETCH_ASSOC));
    }

?>