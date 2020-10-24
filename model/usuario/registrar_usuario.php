<?php
if(isset($_POST["registrarse"])){
    
    require("controller/conexion.php");
    if($_POST["pass"]==$_POST["pass2"]){
        $pass_cifrado=password_hash($_POST["pass"],PASSWORD_DEFAULT,array("cost"=>12));
        try{
            $query="INSERT INTO usuario VALUES(:contr,:nombre,:apellido,:sexo,:email,:carrera,:anio)";
            $resultado=$base->prepare($query);
            $user= htmlentities(addslashes($_POST["control"]));
            $nombre= htmlentities(addslashes($_POST["nombre"]));
            $apellido= htmlentities(addslashes($_POST["apellido"]));
            $sexo= htmlentities(addslashes($_POST["sexo"]));
            $carrera= htmlentities(addslashes($_POST["carrera"]));
            $email= htmlentities(addslashes($_POST["email"]));
            $anio= htmlentities(addslashes($_POST["anio"]));
            $password= htmlentities(addslashes($pass_cifrado));
            $correo = "$email@leon.tecnm.mx";
            $resultado->bindValue(":contr",$user);
            $resultado->bindValue(":nombre",$nombre);
            $resultado->bindValue(":apellido",$apellido);
            $resultado->bindValue(":sexo",$sexo);
            $resultado->bindValue(":email",$correo);
            $resultado->bindValue(":carrera",$carrera);
            $resultado->bindValue(":anio",$anio);
            $resultado->execute();
    
    
            $query="INSERT INTO usuario_password VALUES(:user,:pass)";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":user",$user);
            $resultado->bindValue(":pass",$pass_cifrado);
            
            $resultado->execute();
    
            $query="INSERT INTO usuario_presentacion VALUES(:user,:img,:descripcion)";
            $resultado=$base->prepare($query);
            $img = "user-none.JPG";
            $descripcion ="";
            $resultado->bindValue(":user",$user);
            $resultado->bindValue(":img",$img);
            $resultado->bindValue(":descripcion",$descripcion);
            
            $resultado->execute();
            
            $query="INSERT INTO usuario_verificar VALUES(:user,:clave)";
            $resultado=$base->prepare($query);
            $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $clave = generarCodigo($permitted_chars, 6);
            $resultado->bindValue(":user",$user);
            $resultado->bindValue(":clave",$clave);
            
            $resultado->execute();
            header("location: login?success=13");
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
    }
    function generarCodigo($input, $strength) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
     
        return $random_string;
    }
?>