<?php
    require_once("../controller/conexion.php");
    require_once("../model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(!isset($_SESSION["usuario"])){
        header("location:../login");
    }else{
        $usuario = $_SESSION["usuario"];
    }
    require_once('../model/Usuarios/update_config.php');
    require("../model/usuario/ver_perfil.php");
    $titulo= "Configuración | Pay de Manzana";

    require_once("../view/common/head/head_folder.php");
?>
    <link rel="stylesheet" href="../style/Usuarios/main.css">
    <link rel="stylesheet" href="../style/Usuarios/configuracion.css">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Usuarios/configuracion.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
    ?>
    <script src="../js/Usuarios/config.js"></script>
    <?php
        if($incorrecto){
            echo '<script type="text/javascript"> contraseñaIncorrecta(); </script>';
        }
    ?>
</body>
</html>