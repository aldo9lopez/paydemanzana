<?php
    require_once("controller/conexion.php");
    require_once("model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(!isset($_SESSION["usuario"])){
        header("location:login");
    }else{
        $usuario = $_SESSION["usuario"];
    }

    require("model/usuario/ver_perfil.php");

    $titulo= "Notificaciones | Pay de Manzana";

    require_once("view/common/head/head_index.php");
?>
    <link href="style/index.css" rel="stylesheet">
    <link href="style/notificaciones.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("view/common/header/header_index.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("view/common/sidebar/side_index.php");
                require_once("view/notificaciones.php");
            ?>
        </div>
    </div>
    <?php
        require_once("view/common/footer/footer_index.html");
    ?>
</body>
</html>