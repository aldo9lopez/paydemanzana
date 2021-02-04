<?php
    if(isset($_POST["borrar"])){
        try{
            $post = $_POST["post"];

            $query="SELECT Usuario, Imagen_ruta FROM post WHERE Id_post=:post";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":post",$post);
            $resultado->execute();
            $registro=$resultado->fetch((PDO::FETCH_ASSOC));

            $post_usuario = $registro["Usuario"];
            $post_imagen = $registro["Imagen_ruta"];

            if($post_usuario==$usuario){

                $query="DELETE FROM post_comentario WHERE Post = :post";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->execute();

                $query="DELETE FROM post_manzana WHERE Post = :post";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->execute();

                $query="DELETE FROM post_notificacion WHERE Post = :post";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->execute();

                $query="DELETE FROM post WHERE Id_post = :post";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->execute();

                if($post_imagen!=""){
                    unlink("../$post_imagen");
                }
            }



        }catch(Exception $e){
            $mensaje = $e->getMessage();
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
        }
    }

?>