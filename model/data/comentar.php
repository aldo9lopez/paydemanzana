<?php
    if(isset($_POST["comentar"])){
        try{
            $query="INSERT INTO post_comentario VALUES(:post,:usuario,:fecha,:hora,:comentario)";
            $resultado=$base->prepare($query);
            $comentario= $_POST["comentario"];
            date_default_timezone_set("America/Mexico_City");
            $hora = date('G:i:s');
            $fecha = date("y-n-j");

            $resultado->bindValue(":post",$post);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->bindValue(":fecha",$fecha);
            $resultado->bindValue(":hora",$hora);
            $resultado->bindValue(":comentario",$comentario);
            $resultado->execute();

            $post_ncomentarios++;

            $query="SELECT Usuario FROM post WHERE Id_post = :post";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":post",$post);
            $resultado->execute();
            $registro=$resultado->fetch((PDO::FETCH_ASSOC));

            $usuario_post = $registro["Usuario"];

            if($usuario_post!=$usuario){
                $query="SELECT COUNT(*) FROM post_notificacion WHERE Post = :post AND Tipo = 'Comentario'";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->execute();
                $registro=$resultado->fetch((PDO::FETCH_ASSOC));

                $cuenta = $registro["COUNT(*)"];

                date_default_timezone_set("America/Mexico_City");
                $hora = date('G:i:s');
                $fecha = date("y-n-j");

                if($cuenta>0){
                    $query="UPDATE post_notificacion SET Personas=Personas+1,Fecha=:fecha,Hora=:hora, Visto=0 WHERE Post = :post AND Tipo = 'Comentario'";
                    $resultado=$base->prepare($query);
                    $resultado->bindValue(":fecha",$fecha);
                    $resultado->bindValue(":hora",$hora);
                    $resultado->bindValue(":post",$post);
                    $resultado->execute();
                }else{
                        
                    $query="INSERT INTO post_notificacion VALUES(:post,:usuario,1,:fecha,:hora,2,0)";
                    $resultado=$base->prepare($query);
                    $resultado->bindValue(":post",$post);
                    $resultado->bindValue(":usuario",$usuario_post);
                    $resultado->bindValue(":fecha",$fecha);
                    $resultado->bindValue(":hora",$hora);
                    $resultado->execute();

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