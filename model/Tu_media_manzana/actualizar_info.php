<?php
    if(isset($_POST["enviar"])){
        try{

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

                        $query="UPDATE usuario_presentacion SET Imagen_ruta=:ruta WHERE Usuario=:usuario";
                        $resultado=$base->prepare($query);

                        $resultado->bindValue(":usuario",$usuario);
                        $resultado->bindValue(":ruta",$ruta);
                        $resultado->execute();
                        
                }else{ 
                    echo '<script> window.location.replace("index.php?error=201")</script>';
                    return;
                }
            }

            $signo_zod = $_POST["signo"];
            $redes = $_POST["redes"];
            $preferencias = $_POST["pref"];

            $query="SELECT COUNT(*) FROM mm_basicos WHERE Usuario=:usuario";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->execute();
            $registro=$resultado->fetch((PDO::FETCH_ASSOC));

            $mov = $registro["COUNT(*)"];
            
            if($mov>0){
                $query="UPDATE mm_basicos SET Signo_zodiacal=:signo, Redes=:redes, Preferencias=:pref WHERE Usuario=:usuario";
                $resultado=$base->prepare($query);

                $resultado->bindValue(":usuario",$usuario);
                $resultado->bindValue(":signo",$signo_zod);
                $resultado->bindValue(":redes",$redes);
                $resultado->bindValue(":pref",$preferencias);
                $resultado->execute();
            }else{
                $query="INSERT INTO mm_basicos VALUES(:usuario,:signo,:redes,:pref)";
                $resultado=$base->prepare($query);

                $resultado->bindValue(":usuario",$usuario);
                $resultado->bindValue(":signo",$signo_zod);
                $resultado->bindValue(":redes",$redes);
                $resultado->bindValue(":pref",$preferencias);
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