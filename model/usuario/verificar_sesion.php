<?php
    header('Content-Type: text/html; charset=UTF-8');
    if(isset($_COOKIE["usuario"])&&(session_status()!=2)&&isset($_COOKIE["password"])) {
        $usuario_ver = $_COOKIE["usuario"] . "inspira_pay_alsios";
        if(password_verify($usuario_ver,$_COOKIE["password"])){
            session_start(); 
            $_SESSION["usuario"]=$_COOKIE["usuario"];
            $_SESSION["tipo"]=$_COOKIE["tipo"];
        }
    }
?>