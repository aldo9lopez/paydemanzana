<?php
    session_start();
    session_destroy();
    setcookie("usuario","none",time()-1,'/');
    setcookie("password","none",time()-1, '/');
    setcookie("tipo","none",time()-1, '/');

    echo '<script type="text/javascript">';
    echo 'document.cookie = "usuario=none; max-age= '. time() -1 .'; path=/";';
    echo 'document.cookie = "usuario=none; max-age= '. time() -1 .'; path=/";';
    echo "</script>";

    header("Location:login");
?>