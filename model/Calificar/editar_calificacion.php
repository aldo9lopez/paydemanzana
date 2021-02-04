<?php
    if(isset($_POST["editar"])){
        try{
            require_once("../controller/cript_user.php");
            $reg_usuario = encriptar($usuario);
            $reg_materia = $_POST["materia"];
            $reg_calif = $_POST["id-calif"];
            $reg_ncalif = $_POST["num-calif"];
            $reg_profesor = $_POST["profesor-$reg_ncalif"];
            $reg_estrellas = $_POST["estrellas-$reg_ncalif"];
            $reg_opinion = $_POST["opinion-$reg_ncalif"];
            $reg_manzana = 1;
            if(isset($_POST["manzanaBuena-$reg_ncalif"])){
                $reg_manzana=2;
            }else if(isset($_POST["manzanaMala-$reg_ncalif"])){
                $reg_manzana=3;
            }else{
                $reg_manzana=1;
            }

            $query="UPDATE calificacion SET Profesor=:profesor,Estrellas=:estrellas,Opinion=:opinion,Manzana=:manzana WHERE Id_calificacion = :id_calif AND Usuario = :usuario AND Materia = :materia";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":id_calif",$reg_calif);
            $resultado->bindValue(":usuario",$reg_usuario);
            $resultado->bindValue(":materia",$reg_materia);
            $resultado->bindValue(":profesor",$reg_profesor);
            $resultado->bindValue(":estrellas",$reg_estrellas);
            $resultado->bindValue(":opinion",$reg_opinion);
            $resultado->bindValue(":manzana",$reg_manzana);

            $resultado->execute();
                
            echo '<script> window.location.replace("calificar?materia='.$reg_materia.'")</script>';

        }catch(Exception $e){
            $mensaje = $e->getMessage();
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }
?>