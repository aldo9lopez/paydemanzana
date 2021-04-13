<?php
    require_once("../controller/conexion.php");
    require_once("../controller/uploads.php");
    require_once("../model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(!isset($_SESSION["usuario"])){
        header("Location:../login");
    }else{
        $usuario = $_SESSION["usuario"];
    }

    require_once("../model/Tu_media_manzana/actualizar_info.php");
    require_once("../model/Tu_media_manzana/verificar_test.php");
    require("../model/usuario/ver_perfil.php");
    $titulo= "Tu media manzana | Pay de Manzana";

    require_once("../view/common/head/head_folder.php");
?>
    <link rel="stylesheet" href="../style/Tu_media_manzana/main.css">
    <link rel="stylesheet" href="../style/Tu_media_manzana/index.css">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Tu_media_manzana/index.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
    ?>
    <script src="../js/Tu_media_manzana/index.js"></script>
</body>
</html>