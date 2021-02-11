<?php
    session_start();
    session_destroy();
    setcookie("usuario","none",time()-1,'/', '.paydmanzana.com');
    setcookie("password","none",time()-1, '/', '.paydmanzana.com');
    setcookie("tipo","none",time()-1, '/', '.paydmanzana.com');

    header("Location:login");
?>