<?php
if(session_status()!=2){
    session_start();
}
if(isset($_POST["enviar"])){
    require("controller/conexion.php");
    $usuario = $_POST["usuario"];
    $clave = $_POST["codigo"];
    $query = "SELECT Clave FROM usuario_verificar where Usuario=:user";
    $resultado = $base->prepare($query);
    $resultado->bindValue(":user", $usuario);
    $resultado->execute();
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
    if($clave==html_entity_decode($registro["Clave"], ENT_QUOTES,"UTF-8")){
        try{
            $query="DELETE FROM usuario_verificar WHERE Usuario=:user";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":user", $usuario);
        
            $resultado->execute();
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            $_SESSION["tipo"] = $tipo;
            header("location:index");
        }catch(Exception $e){
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }else{
        echo '<script type="text/javascript">';
        echo 'accessDeny();';
        echo "</script>";
    }
}

?>