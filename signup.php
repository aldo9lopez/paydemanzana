<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Registrarse | Pay de Manzana</title>
    <link rel="shortcut icon" href="images/ico-copia.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/signup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

    <script src="js/signup-head.js"></script>
<?php
    require_once("model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(isset($_SESSION["usuario"])){
        header("Location:index");
    }
?>

<?php
    require_once("model/usuario/registrar_usuario.php");
?>

<body>
    <div class="main">
        
        <img src="images/logo-blanco.png" alt="pay-d-man-logo" width="200px">

        <div class="signup">
            <h2>Registro:</h2>
            <p class="info-tec"><strong>¿Eres del Instituto Tecnológico de León?</strong><br> Escribe tus datos</p>
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")); ?>" method="post" onsubmit="return validar()">
                <table class="registro">
                    <tr>
                        <td colspan="1">
                            <input placeholder="Número de Control" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="control" id="control" onchange="numeroDeControl()" maxlength="8">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="correo">
                            <input type="text" placeholder="Correo institucional" name="email" id="email" maxlength="8">
                            <label for="email" class="correo">@leon.tecnm.mx</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">
                            <input type="text" placeholder="Nombre(s)" name="nombre" id="nombre" maxlength="60">
                        </td>
                        <td>
                            <input type="text" placeholder="Apellido" name="apellido" id="apellido" maxlength="80">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo">
                                <option value="1" id="hombre">Hombre</option>
                                <option value="2" id="mujer">Mujer</option>
                                <option value="3">No especificado</option>
                            </select>
                        </td>
                        <td colspan="1">
                            <label for="carrera">Carrera: *</label>
                            <select name="carrera" id="carrera">
                                <option value="1" id="sistemas">Sistemas</option>
                                <option value="2" id="tics">TICs</option>
                                <option value="3" id="electronica">Electrónica</option>
                                <option value="4" id="mecatronica">Mecatrónica</option>
                                <option value="5" id="electromecanica">Electromecánica</option>
                                <option value="6" id="logistica">Logística</option>
                                <option value="7" id="industrial">Industrial</option>
                                <option value="8" id="gestion">Gestión</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="1">
                            <label for="anio">Año de ingreso:</label>
                            <select name="anio" id="anio">
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                            </select>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label for="pass">Contraseña:</label>
                            <input type="password" name="pass" id="pass">
                        </td>
                        <td>
                            <label for="pass2">Repite la contraseña:</label>
                            <input type="password" name="pass2" id="pass2">
                        </td>
                    </tr>
                </table>
                <p class="info-correo">*Te enviaremos un código de activación a tu correo institucional</p>
                
                <input type="checkbox" name="privacidad" id="privacidad" onchange="checkPrivacidad();"><label for="privacidad"> He leído y estoy de acuerdo con el 
                <a href="aviso_privacidad.pdf" target="_blank" class="linkpriv" style="text-decoration: none; color:#346ca0;">Aviso de privacidad</a></label>
                <br>
                <input type="submit" value="Registrarse" name="registrarse" id="registrarse" style="background: #f8b1b1; color:#3a3a3a" disabled>

            </form>
            <br>
            <hr class="linea">
            <div class="header">
            <img src="images/escuelas/itleon.png" alt="pay-d-man-logo" width="80px">
            </div>

        </div>
        
        <div class="acceder">
            <p>¿Ya tienes cuenta? <a href="login">Inicia sesión</a></p>
        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/signup.js"></script>
    
</body>