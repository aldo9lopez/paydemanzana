<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Acceder</title>
    <link rel="shortcut icon" href="images/ico-copia.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <div class="main">
        <img src="images/logo-blanco.png" alt="pay-d-man-logo" width="200px">
        <div class="login">
            <img src="images/user-none-2.PNG" alt="Usuario" width="150px">
            <h2>Acceder</h2>

            <form action="<?php?>" method="post">
                <div class="text">
                    <i class="material-icons">person</i>
                    <input type="text" name="usuario" id="usuario" placeholder="Número de control">
                </div>
                <div class="text">
                    <i class="material-icons">lock</i>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                </div>
                <div class="btn">
                    <input type="submit" name="enviar" value="Iniciar Sesión">
                </div>
                <div class="check">
                    <input type="checkbox" name="recordar" id="recordar">
                    <label for="recordar">Recordar</label>
                    <a href="#" class="forgot-pass">Olvidé mi contraseña</a>
                </div>
            </form>
        </div>
        <div class="registrarse">
            <p>¿No tienes cuenta? <a href="signup">Regístrate gratis</a></p>
        </div>
    </div>
    
    
</body>
</html>