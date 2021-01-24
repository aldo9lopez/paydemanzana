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
            }
        }catch(Exception $e){
            $mensaje = $e->getMessage();
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
        }
    }

?>