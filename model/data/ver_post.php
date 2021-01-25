<?php
    if(!isset($_GET["id"])){
        header("location:../");
    }
    $post = $_GET["post"];

    $sql="SELECT * FROM post WHERE Id_post=:post";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":post",$post);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $post_usuario = $registro["Usuario"];
    $subjectsem = $registro["Semestre"];
    $subjectcareer = $registro["Carrera"];

?>