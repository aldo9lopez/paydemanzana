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
    if(!isset($_GET["materia"])){
        header("location:../login");
    }
    $materia = $_GET["materia"];
    require("../model/usuario/ver_perfil.php");
    require("../model/usuario/ver_materia.php");

    if($subjectcareer!=$carrera){
        header("location:../login");
    }

    $titulo= "Calificar - $subjectname";

    require_once("../view/common/head/head_folder.php");
?>
    <link href="../style/Calificar/main.css" rel="stylesheet">
    <link href="../style/Calificar/calificar.css" rel="stylesheet">

</head>
<body>
    <?php
        require_once("../view/common/header/header_folder.html");
    ?>
    <div class="main">
        <div class="contenido">
            <?php
                require_once("../view/common/sidebar/side_folder.php");
                require_once("../view/Calificar/calificar.php");
            ?>
        </div>
    </div>
    <?php
        require_once("../view/common/footer/footer_folder.html");
    ?>
</body>