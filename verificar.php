<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Verificar usuario</title>
    <link rel="shortcut icon" href="images/ico-copia.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/signup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<?php
    require_once("model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(isset($_SESSION["usuario"])){
        header("location:index.php");
    }

?>

<div class="main">
        <img src="images/logo-inspira.png" alt="Inspira-logo" width="200px">
        <div class="login">
            <h2>Verificar usuario</h2>
            <p>Hemos enviado un código de verificación tu correo institucional favor de proporcionarlo para iniciar sesión</p>
            <form action="model/usuarios/validar_codigo.php" method="post">
                <label for="codigo">Código de verificación</label>
                <input type="text" name="codigo" id="codigo">
                <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario; ?>">
                <div class="btn">
                    <input type="submit" name="enviar" value="Validar">
                </div>
            </form>
        </div>
        <div class="reenviar-correo">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <p>¿No recibiste el correo? Busca en tu bandeja de spam o haz click en el siguiente botón para volver reenviar el correo</p>
                <input type="submit" name="submit" value="Reenviar correo">
            </form>
        </div>
    </div>