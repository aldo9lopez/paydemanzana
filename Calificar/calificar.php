<?php
require_once("../controller/conexion.php");
require_once("../model/usuario/verificar_sesion.php");
if (session_status() != 2) {
    session_start();
}
if (!isset($_SESSION["usuario"])) {
    header("Location:../login");
} else {
    $usuario = $_SESSION["usuario"];
}
if (!isset($_GET["materia"])) {
    header("Location:../login");
}
$materia = $_GET["materia"];
require("../model/usuario/ver_perfil.php");
require("../model/usuario/ver_materia.php");
require_once("../model/Calificar/registrar_calificacion.php");
require_once("../model/Calificar/editar_calificacion.php");

if ($subjectcareer != $carrera) {
    header("Location:../login");
}

$titulo = "Calificar - $subjectname | Pay de Manzana";

require_once("../view/common/head/head_folder.php");
?>
<link href="../style/Calificar/main.css" rel="stylesheet">
<link href="../style/Calificar/calificar.css" rel="stylesheet">

<!-- Recursos -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link href="../style/Calificar/dist/component-chosen.css" rel="stylesheet">
<link rel="stylesheet" href="../style/Calificar/dist/check.css">
<link rel="stylesheet" href="../style/Calificar/dist/estrellas.css">


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!---->
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
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../js/Calificar/calificar.js"></script>
    
</body>
</html>