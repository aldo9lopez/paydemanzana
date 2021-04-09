<?php
    if(isset($_POST["enviar-1"])){
        try{
            $query="SELECT COUNT(*) FROM mm_test1 WHERE Usuario=:usuario";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":usuario",$usuario);
            $resultado->execute();
            $registro=$resultado->fetch((PDO::FETCH_ASSOC));

            $mov = $registro["COUNT(*)"];

            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            $q8 = $_POST['q8'];
            $q9 = $_POST['q9'];
            $q10 = $_POST['q10'];

            if($mov>0){
                $query="UPDATE mm_test1 SET Q1=:q1,Q2=:q2,Q3=:q3,Q4=:q4,Q5=:q5,Q6=:q6,Q7=:q7,Q8=:q8,Q9=:q9,Q10=:q10 WHERE Usuario=:usuario";
                $resultado=$base->prepare($query);

                $resultado->bindValue(":usuario",$usuario);
                $resultado->bindValue(":q1",$q1);
                $resultado->bindValue(":q2",$q2);
                $resultado->bindValue(":q3",$q3);
                $resultado->bindValue(":q4",$q4);
                $resultado->bindValue(":q5",$q5);
                $resultado->bindValue(":q6",$q6);
                $resultado->bindValue(":q7",$q7);
                $resultado->bindValue(":q8",$q8);
                $resultado->bindValue(":q9",$q9);
                $resultado->bindValue(":q10",$q10);
                $resultado->execute();

            }else{ 
                $query="INSERT INTO mm_test1 VALUES(:usuario,:q1,:q2,:q3,:q4,:q5,:q6,:q7,:q8,:q9,:q10)";
                $resultado=$base->prepare($query);

                $resultado->bindValue(":usuario",$usuario);
                $resultado->bindValue(":q1",$q1);
                $resultado->bindValue(":q2",$q2);
                $resultado->bindValue(":q3",$q3);
                $resultado->bindValue(":q4",$q4);
                $resultado->bindValue(":q5",$q5);
                $resultado->bindValue(":q6",$q6);
                $resultado->bindValue(":q7",$q7);
                $resultado->bindValue(":q8",$q8);
                $resultado->bindValue(":q9",$q9);
                $resultado->bindValue(":q10",$q10);
                $resultado->execute();

                
                echo '<script> window.location.replace("index")</script>';

            }

        }catch(Exception $e){
            $mensaje = $e->getMessage();
                echo '<script type="text/javascript">';
                echo 'window.alert("'. $e->getMessage() .'");';
                echo "</script>";
        }
    }


?>