<?php
    require_once("../../controller/conexion.php");
    if(isset($_POST['post']) && !empty($_POST['post'])) {
        try{
            $post = $_POST['post'];
            $post_usuario = $_POST['usuario'];

            $query="SELECT COUNT(*) FROM post_manzana WHERE Post = :post AND Usuario = :usuario";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":post",$post);
            $resultado->bindValue(":usuario",$post_usuario);
            $resultado->execute();
            $registro=$resultado->fetch((PDO::FETCH_ASSOC));

            $cuenta = $registro["COUNT(*)"];
            if($cuenta>0){
                $query="DELETE FROM post_manzana WHERE Post = :post AND Usuario = :usuario";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->bindValue(":usuario",$post_usuario);
                $resultado->execute();
            }else{
                $query="INSERT INTO post_manzana VALUES(:post,:usuario,1)";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->bindValue(":usuario",$post_usuario);
                $resultado->execute();

                
                $query="SELECT Usuario FROM post WHERE Id_post = :post";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":post",$post);
                $resultado->execute();
                $registro=$resultado->fetch((PDO::FETCH_ASSOC));

                $usuario_post = $registro["Usuario"];

                if($usuario_post!=$post_usuario){
                    $query="SELECT COUNT(*) FROM post_notificacion WHERE Post = :post AND Tipo = 'Manzana'";
                    $resultado=$base->prepare($query);
                    $resultado->bindValue(":post",$post);
                    $resultado->execute();
                    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

                    $cuenta = $registro["COUNT(*)"];

                    date_default_timezone_set("America/Mexico_City");
                    $hora = date('G:i:s');
                    $fecha = date("y-n-j");


                    $query="SELECT COUNT(*) FROM post_manzana WHERE Post = :post";
                    $resultado=$base->prepare($query);
                    $resultado->bindValue(":post",$post);
                    $resultado->execute();
                    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

                    $personas = $registro["COUNT(*)"];

                    if($cuenta>0){
                        $query="UPDATE post_notificacion SET Personas=:personas,Fecha=:fecha,Hora=:hora,Visto=0 WHERE Post = :post AND Tipo = 'Manzana'";
                        $resultado=$base->prepare($query);
                        $resultado->bindValue(":personas",$personas);
                        $resultado->bindValue(":fecha",$fecha);
                        $resultado->bindValue(":hora",$hora);
                        $resultado->bindValue(":post",$post);
                        $resultado->execute();
                    }else{
                        
                        $query="INSERT INTO post_notificacion VALUES(:post,:usuario,:personas,:fecha,:hora,1,0)";
                        $resultado=$base->prepare($query);
                        $resultado->bindValue(":post",$post);
                        $resultado->bindValue(":usuario",$usuario_post);
                        $resultado->bindValue(":personas",$personas);
                        $resultado->bindValue(":fecha",$fecha);
                        $resultado->bindValue(":hora",$hora);
                        $resultado->execute();

                    }
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