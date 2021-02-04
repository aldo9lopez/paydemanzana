<?php
    if(isset($_POST["enviar"])){
        try{
            $descripcion = $_POST["descripcion"];
            $ruta="user-none.JPG";

            if(isset($_FILES["inpFile"]) && $_FILES["inpFile"]['name']!=""){
                $path = $_FILES['inpFile']['name'];
                $nombre_file=$usuario .'-' . rand(1,100) . '.' . pathinfo($path, PATHINFO_EXTENSION);
                $tipo_file=$_FILES["inpFile"]['type'];
                $tamano_file=$_FILES["inpFile"]['size'];
        
                if($tamano_file<=5000000 ){
                        $query="SELECT Imagen_ruta FROM usuario_presentacion WHERE Usuario=:usuario";
                        $resultado=$base->prepare($query);
                        $resultado->bindValue(":usuario",$usuario);
                        $resultado->execute();
                        $registro=$resultado->fetch((PDO::FETCH_ASSOC));
            
                        $antigua_ruta = $registro["Imagen_ruta"];

                        if($antigua_ruta!="user-none.JPG"){
                            unlink("../uploads/profile-images/$antigua_ruta");
                        }

                        $ruta = "$nombre_file";
                        //Ruta de la carpeta de destino
                        $destino= $ruta_servidor . 'profile-images/';
                        //Carpeta temporal a carpeta de destino
                        move_uploaded_file($_FILES["inpFile"]['tmp_name'],$destino . $nombre_file);
                }else{
                    header("location:index.php?error=201");
                    return;
                }
            }
            $query="UPDATE usuario_presentacion SET Imagen_ruta=:ruta, Descripcion=:descripcion WHERE Usuario=:usuario";
            $resultado=$base->prepare($query);

            $resultado->bindValue(":usuario",$usuario);
            $resultado->bindValue(":descripcion",$descripcion);
            $resultado->bindValue(":ruta",$ruta);
            $resultado->execute();
            header("location:miperfil");

        }catch(Exception $e){
            $mensaje = $e->getMessage();
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
        }
    }


?>