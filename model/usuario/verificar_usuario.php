<?php

if (isset($_POST["enviar"])) {
    require("controller/conexion.php");
    try {
        $query = "SELECT * FROM usuario_password where Usuario=:user";
        $resultado = $base->prepare($query);
        $user = htmlentities(addslashes($_POST["usuario"]));
        $resultado->bindValue(":user", $user);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
            $registro = $resultado->fetch(PDO::FETCH_ASSOC);
            if (password_verify($_POST["contrasena"], $registro["Password"])) {
                $query = "SELECT COUNT(Clave) FROM usuario_verificar where Usuario=:user";
                $resultado = $base->prepare($query);
                $resultado->bindValue(":user", $user);
                $resultado->execute();
                $registro = $resultado->fetch(PDO::FETCH_ASSOC);
                $numero = $registro["COUNT(Clave)"];
                if ($numero > 0) {
                    session_start();
                    $_SESSION["preusuario"] = $_POST["usuario"];
                    echo '<script> window.location.replace("verificar")</script>';
                } else {
                    if (isset($_POST["recordar"])) {
                        $user_hash = $user . "inspira_pay_alsios";
                        setcookie("usuario", $_POST["usuario"], time() + 864000000, '/');
                        setcookie("password", password_hash($user_hash, PASSWORD_DEFAULT), time() + 864000000, '/');
                    }
                    session_start();
                    $_SESSION["usuario"] = $user;
                    
                    echo '<script> window.location.replace("index")</script>';
                }
            } else {
                echo '<script type="text/javascript">';
                echo "accessDeny();";
                echo "</script>";
            }
        } else {
            echo '<script type="text/javascript">';
            echo "accessDeny();";
            echo "</script>";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}

if(isset($_GET["success"])){
    if($_GET["success"]==13){
        echo '<script type="text/javascript">';
        echo "userSuccess();";
        echo "</script>";
    }
}
