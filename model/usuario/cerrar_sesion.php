<?php
    session_start();
    session_destroy();
    setcookie("usuario","none",time()-1,'/', '.paydemanzana.com');
    setcookie("password","none",time()-1, '/', '.paydemanzana.com');
    setcookie("tipo","none",time()-1, '/', '.paydemanzana.com');

    header("Location:login");
?>