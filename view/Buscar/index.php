<div class="espacio">
    <div class="frame">
        <h3>Resultados de la busqueda</h3>
        <?php
            foreach($resultados_busqueda as $result){
                if($searchtype=="usuarios"){
                    require("../model/Buscar/buscar_usuario.php");
                    ?>
                    <div class="usuario">
                        <img width="50px" src="../uploads/profile-images/<?php echo $resultado_imagen;?>" alt="<?php echo $result->Nombre . " " . $result->Apellido;?>">
                        <a href="#?id=<?php echo $result->No_control;?>"><?php echo $result->Nombre . " " . $result->Apellido;?></a>
                        <span class="result-carrera"><?php echo $resultado_carrera;?></span>
                    </div>
                    <?php
                }else if($searchtype=="materias"){
                    ?>
                    <div class="materias">
                        <a href="#?id=<?php echo $result->Id_materia;?>"><?php echo $result->Nombre_materia;?></a>
                    </div>
                    
                    <?php
                }else if($searchtype=="profesores"){
                    ?>
                    <div class="profesores">
                        <a href="#?id=<?php echo $result->Id_profesor;?>"><?php echo $result->Titulo . " " . $result->Nombre ;?></a>
                    </div>
                    
                    <?php
                }
            }
        ?>
    </div>
</div>