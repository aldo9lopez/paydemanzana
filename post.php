<?php
    require_once("controller/conexion.php");
    require_once("model/usuario/verificar_sesion.php");
    if(session_status()!=2){
        session_start();
    }
    if(!isset($_SESSION["usuario"])){
        header("Location:login");
    }else{
        $usuario = $_SESSION["usuario"];
    }

    require("model/usuario/ver_perfil.php");
    require_once("model/data/ver_post.php");
    require_once("model/data/comentar.php");
    $titulo= "$post_nombre: $post_txt_corto | Pay de Manzana";

    require_once("view/common/head/head_index.php");
?>
    <link href="style/index.css" rel="stylesheet">
    <link href="style/post.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("view/common/header/header_index.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("view/common/sidebar/side_index.php");
                require_once("view/post.php");
            ?>
        </div>
    </div>
    <?php
        require_once("view/common/footer/footer_index.html");
    ?>
    <script src="js/index.js"></script>
</body>
</html>