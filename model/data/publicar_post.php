<?php
    if(isset($_POST["publicar"])){
        try{
            //$query="SELECT AUTO_INCREMENT AS Siguiente FROM information_schema.tables
            //WHERE table_name = 'post' and table_schema = 'paydmanz_ana';";
            $query="SELECT AUTO_INCREMENT AS Siguiente FROM information_schema.tables
            WHERE table_name = 'post' and table_schema = 'pay_de_manzana';";
            $resultado=$base->prepare($query);
            $resultado->execute();
            $registro=$resultado->fetch((PDO::FETCH_ASSOC));

            $id = $registro["Siguiente"];

            $query="INSERT INTO post VALUES(:id,:usuario,:carrera,:fecha,:hora,:comentario,:ruta)";
            $resultado=$base->prepare($query);
            $comentario= $_POST["comentario"];
            date_default_timezone_set("America/Mexico_City");
            $hora = date('G:i:s');
            $fecha = date("y-n-j");
            $ruta="";

            if(isset($_FILES["imagen"]) && $_FILES["imagen"]['name']!=""){
                $path = $_FILES['imagen']['name'];
                $nombre_file=$id . '.' . pathinfo($path, PATHINFO_EXTENSION);
                $tipo_file=$_FILES["imagen"]['type'];
                $tamano_file=$_FILES["imagen"]['size'];
        
        
                if($tamano_file<=5000000 ){
                        $ruta = "uploads/post/$nombre_file";
                        //Ruta de la carpeta de destino
                        $destino= $ruta_servidor . 'post/';
                        //Carpeta temporal a carpeta de destino
                        move_uploaded_file($_FILES["imagen"]['tmp_name'],$destino . $nombre_file);
                }else{
                    echo '<script> window.location.replace("index.php?error=201")</script>';
                    return;
                }
            }
            

            $resultado->bindValue(":id",$id);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->bindValue(":carrera",$carrera);
            $resultado->bindValue(":fecha",$fecha);
            $resultado->bindValue(":hora",$hora);
            $resultado->bindValue(":comentario",$comentario);
            $resultado->bindValue(":ruta",$ruta);
            $resultado->execute();
        }catch(Exception $e){
            $mensaje = $e->getMessage();
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
        }

    }


?>