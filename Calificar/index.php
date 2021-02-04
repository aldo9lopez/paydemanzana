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
    $titulo= "Calificar - $careername | Pay de Manzana";

    require_once("../view/common/head/head_folder.php");
?>
    <link href="../style/Calificar/main.css" rel="stylesheet">
    <link href="../style/Calificar/index.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Calificar/index.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
    ?>
</body>
</html>