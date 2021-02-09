<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reestablecer contraseña | Pay de Manzana</title>
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
    require_once("model/usuario/reestablecer.php");
?>

<body>
    <div class="main">
        
        <img src="images/logo-blanco.png" alt="pay-d-man-logo" width="200px">

        <div class="signup">
            <h2>Reestablecer contraseña</h2>
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")); ?>" method="post" onsubmit="return validar()">
                <table class="registro">
                    <tr>
                        <td colspan="1">
                            <label for="carrera">Numero de control:</label>
                            <input placeholder="Número de Control" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="control" id="control" onchange="numeroDeControl()" maxlength="8">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">
                            <label for="carrera">Carrera:</label>
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
                    
                </table>
                <p class="info-correo">*Te enviaremos una contraseña provisional a tu correo institucional</p>
                <input type="submit" value="Reestablecer" name="enviar" id="enviar">
            </form>
            </div>

        </div>
        

    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/password_reset.js"></script>
    <?php
        if($alerta){
            echo '<script type="text/javascript">alerta();</script>';

        }
    
    ?>
    
</body>