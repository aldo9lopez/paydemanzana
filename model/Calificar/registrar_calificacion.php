<?php
    if(isset($_POST["calificar"])){
        try{
            require_once("../controller/cript_user.php");
            $reg_usuario = encriptar($usuario);
            $reg_nveces = $_POST["n-veces"];
            $reg_materia = $_POST["materia"];
            $reg_status = 2;
            $reg_profesor = 0;
            $reg_estrellas = 0;
            $reg_opinion = 0;
            $reg_manzana = 1;

            for($i=1;$i<=$reg_nveces;$i++){
                $reg_status = 2;
                if($i==$reg_nveces){
                    $reg_status=1;
                }
                $reg_profesor = $_POST["profesor-$i"];
                $reg_estrellas = $_POST["estrellas-$i"];
                $reg_opinion = $_POST["opinion-$i"];
                if(isset($_POST["manzanaBuena-$i"])){
                    $reg_manzana=2;
                }else if(isset($_POST["manzanaMala-$i"])){
                    $reg_manzana=3;
                }else{
                    $reg_manzana=1;
                }

                $query="INSERT INTO calificacion VALUES(NULL,:usuario,:estatus,:materia,:profesor,:estrellas,:opinion,:manzana)";
                $resultado=$base->prepare($query);
                $resultado->bindValue(":usuario",$reg_usuario);
                $resultado->bindValue(":estatus",$reg_status);
                $resultado->bindValue(":materia",$reg_materia);
                $resultado->bindValue(":profesor",$reg_profesor);
                $resultado->bindValue(":estrellas",$reg_estrellas);
                $resultado->bindValue(":opinion",$reg_opinion);
                $resultado->bindValue(":manzana",$reg_manzana);
                
                $resultado->execute();
                
                header("location:semestre?id=$subjectsem");

            }

        }catch(Exception $e){
            $mensaje = $e->getMessage();
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }
?>