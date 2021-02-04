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

    require("../model/usuario/ver_perfil.php");
    require_once("../model/Usuarios/ver_usuario.php");
    $titulo= "$perfil_nombre | Pay de Manzana";

    require_once("../view/common/head/head_folder.php");
?>
    <link rel="stylesheet" href="../style/Usuarios/main.css">
    <link rel="stylesheet" href="../style/Usuarios/perfil.css">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Usuarios/index.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
    ?>
    <script src="../js/Usuarios/perfil.js"></script>
</body>
</html>