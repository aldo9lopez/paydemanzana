<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'resources/mailer/Exception.php';
require 'resources/mailer/PHPMailer.php';
require 'resources/mailer/SMTP.php';

$alerta=false;

if(isset($_POST["enviar"])){
    require("controller/conexion.php");

    $query = "SELECT Correo, Anio_ingreso, Carrera FROM usuario WHERE No_control=:user";
    $usuario = $_POST["control"];
    $carrera = $_POST["carrera"];
    $anio = $_POST["anio"];
    $resultado = $base->prepare($query);
    $resultado->bindValue(":user", $usuario);
    $resultado->execute();
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);

    if($resultado->rowCount()>0){
            

        if($registro["Anio_ingreso"]==$anio&&$registro["Carrera"]==$carrera){
            try{
                $correo = $registro["Correo"];
                $query="UPDATE usuario_password SET Password=:clave WHERE Usuario=:usuario";
                $resultado=$base->prepare($query);
                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $codigo = generarCodigo($permitted_chars, 8);
                $resultado->bindValue(":usuario",$usuario);
                $pass_cifrado=password_hash($codigo,PASSWORD_DEFAULT,array("cost"=>12));
                $resultado->bindValue(":clave",$pass_cifrado);
                    
                $resultado->execute();

                $mail = new PHPMailer(true);

                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'paydmanzana.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'soporte@paydmanzana.com';                     // SMTP username
                $mail->Password   = 'SDidko!mai_2ss';                               // SMTP password
                $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                $mail->setFrom('soporte@paydmanzana.com', 'Equipo Pay de Manzana');
                $mail->addAddress($correo,'Usuario');

                    // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Nueva contraseña para Pay de Manzana';
                $mail->Body    = "Su nueva contraseña es: <b>$codigo</b> <br>Favor de cambiarla en la brevedad posible<br>¡Gracias por usar Pay de Manzana!";

                $mail->send();

                echo '<script> window.location.replace("login?success=24")</script>';


            }catch(Exception $e){
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
            }
        }else{
            $alerta=true;
        }
        
    }else{
        $alerta=true;

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