<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'resources/mailer/Exception.php';
require 'resources/mailer/PHPMailer.php';
require 'resources/mailer/SMTP.php';

if(session_status()!=2){
    session_start();
}
if(isset($_POST["enviar"])){
    require("controller/conexion.php");
    $usuario = $_POST["usuario"];
    $clave = $_POST["codigo"];
    $query = "SELECT Clave FROM usuario_verificar where Usuario=:user";
    $resultado = $base->prepare($query);
    $resultado->bindValue(":user", $usuario);
    $resultado->execute();
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
    
    if($clave==html_entity_decode($registro["Clave"], ENT_QUOTES,"UTF-8")){
        try{
            $query="DELETE FROM usuario_verificar WHERE Usuario=:user";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":user", $usuario);
        
            $resultado->execute();
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            $_SESSION["tipo"] = $tipo;
            echo '<script> window.location.replace("index")</script>';
        }catch(Exception $e){
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }else{
        echo '<script type="text/javascript">';
        echo 'accessDeny();';
        echo "</script>";
    }
}


if(isset($_POST["enviar-correo"])){
    require("controller/conexion.php");

    $query = "SELECT Correo FROM usuario WHERE No_control=:user";
    $usuario = $_POST["usuario"];
    $resultado = $base->prepare($query);
    $resultado->bindValue(":user", $usuario);
    $resultado->execute();
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);

    $correo = $registro["Correo"];


    try{
        $query="UPDATE usuario_verificar SET Clave=:clave WHERE Usuario=:usuario";
        $resultado=$base->prepare($query);
        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $clave = generarCodigo($permitted_chars, 6);
        $resultado->bindValue(":usuario",$usuario);
        $resultado->bindValue(":clave",$clave);
            
        $resultado->execute();

        $mail = new PHPMailer(true);

        $mail->send();


    }catch(Exception $e){
        echo '<script type="text/javascript">';
        echo 'window.alert("'. $e->getMessage() .'");';
        echo "</script>";
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
