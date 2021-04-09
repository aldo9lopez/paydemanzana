<?php
    require_once("../controller/conexion.php");
    require_once("../model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(!isset($_SESSION["usuario"])){
        header("Location:../login");
    }else{
        $usuario = $_SESSION["usuario"];
    }

    require("../model/usuario/ver_perfil.php");
    require_once("../model/Tu_media_manzana/subir_test1.php");
    require_once("../model/Tu_media_manzana/subir_test2.php");
    require_once("../model/Tu_media_manzana/subir_test3.php");
    require_once("../model/Tu_media_manzana/ver_cuestionarios.php");
    $titulo= "$test_nombre| Pay de Manzana";

    require_once("../view/common/head/head_folder.php");
?>
    <link rel="stylesheet" href="../style/Tu_media_manzana/main.css">
    <link rel="stylesheet" href="../style/Tu_media_manzana/test.css">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Tu_media_manzana/test.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
    ?>
    <script src="../js/Tu_media_manzana/index.js"></script>
</body>
</html>