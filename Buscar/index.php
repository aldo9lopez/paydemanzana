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
    require("../model/Buscar/busqueda.php");
    $titulo= "Buscar - $search en $searchtype";

    require_once("../view/common/head/head_folder.php");
?>
    <link href="../style/Buscar/main.css" rel="stylesheet">
    <link href="../style/Buscar/index.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Buscar/index.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
        echo "<script type=\"text/javascript\">";
        echo "$( document ).ready(function() {
            $(\"#buscar-tipo option[value=$searchtype\").attr(\"selected\",true);
        });";
        echo "</script>"
    ?>
    <script src="../js/Buscar/buscar.js"></script>
</body>
</html>