<?php
    include("cont_1.php");
    $len = strlen($ruta_file);
    $len3 = strlen($_SERVER['DOCUMENT_ROOT']);
    $len2 = $len - ($len3 + 23);
    $rutaNueva = substr($ruta_file,$len3+1,$len2);


    $ruta_servidor = "/home1/paydmanz/public_html/uploads/";

?>