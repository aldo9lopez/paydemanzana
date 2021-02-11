

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
<?php
    session_start();
    session_destroy();
    setcookie("usuario","none",time()-1,'/', '.paydmanzana.com');
    setcookie("password","none",time()-1, '/', '.paydmanzana.com');
    setcookie("tipo","none",time()-1, '/', '.paydmanzana.com');

    echo '<script type="text/javascript">';
    echo 'document.cookie = "usuario=none; max-age=-1; path=/";';
    echo 'document.cookie = "password=none; max-age=-1; path=/";';
    echo ' window.location.replace("login")';
    echo "</script>";

?>

</head>
<body>
</body>
</html>