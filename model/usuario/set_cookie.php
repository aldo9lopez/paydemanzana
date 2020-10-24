<?php
    $user_hash = $user . "inpira_pay_alsios";
    setcookie("usuario",$_POST["usuario"],time()+86400);
    setcookie("password",password_hash($user_hash, PASSWORD_DEFAULT),time()+86400);
?>