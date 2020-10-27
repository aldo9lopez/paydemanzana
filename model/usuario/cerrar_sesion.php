<?php
    session_start();
    session_destroy();
    setcookie("usuario","none",time()-1,'/');
    setcookie("password","none",time()-1, '/');
    setcookie("tipo","none",time()-1, '/');
    header("location:login");
?>