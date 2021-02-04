<?php
    if(isset($_POST["enviar-nombre"])){
        try{ 
            $nombre= $_POST["nombre"];
            $apellido= $_POST["apellido"];
            $query="UPDATE usuario SET Nombre=:nombre, Apellido=:apellido WHERE No_control = :usuario";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":nombre",$nombre);
            $resultado->bindValue(":apellido",$apellido);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->execute();
        }catch(Exception $e){
            $mensaje = $e->getMessage();
            if(strpos($mensaje,'Duplicate') !== false){
                echo '<script type="text/javascript">';
                echo "usuarioRepetido();";
                echo "</script>";
            }else{
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
            }
        }  


    }

    if(isset($_POST["enviar-sexo"])){
        try{ 
            
            $sexo= $_POST["sexo"];
            $query="UPDATE usuario SET Sexo=:sexo WHERE No_control = :usuario";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":sexo",$sexo);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->execute();
        }catch(Exception $e){
            $mensaje = $e->getMessage();
            if(strpos($mensaje,'Duplicate') !== false){
                echo '<script type="text/javascript">';
                echo "usuarioRepetido();";
                echo "</script>";
            }else{
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
            }
        }  


    }

    if(isset($_POST["enviar-anio"])){
        try{ 
            $anio= $_POST["anio"];
            $query="UPDATE usuario SET Anio_ingreso=:anio WHERE No_control = :usuario";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":anio",$anio);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->execute();
        }catch(Exception $e){
            $mensaje = $e->getMessage();
            if(strpos($mensaje,'Duplicate') !== false){
                echo '<script type="text/javascript">';
                echo "usuarioRepetido();";
                echo "</script>";
            }else{
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
            }
        }  


    }
    $incorrecto=false;

    if(isset($_POST["enviar-pass"])){
        if($_POST["pass"]==$_POST["pass2"]){
            $pass_actual = $_POST["pass-act"];
            $query = "SELECT Password FROM usuario_password where Usuario=:user";
            $resultado = $base->prepare($query);
            $resultado->bindValue(":user", $usuario);
            $resultado->execute();
            $registro = $resultado->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass_actual, $registro["Password"])) {
                try{
                    $pass_cifrado=password_hash($_POST["pass"],PASSWORD_DEFAULT,array("cost"=>12));
                    $query="UPDATE usuario_password SET Password=:pass WHERE Usuario=:user";
                    $resultado=$base->prepare($query);
                    $resultado->bindValue(":user", $usuario);
                    $resultado->bindValue(":pass", $pass_cifrado);
                
                    $resultado->execute();
                    
                }catch(Exception $e){
                    echo '<script type="text/javascript">';
                    echo 'window.alert("'. $e->getMessage() .'");';
                    echo "</script>";
                }
            }else{
                $incorrecto=true;
            }
        }else{

        }


    }


?>