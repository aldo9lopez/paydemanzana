<div class="espacio">
    <div class="movil-selection">
        <span class="movil-option">
        <?php
            if($searchtype!="usuarios"){
                echo '<span class="movil-option">';
                echo "<a href=\"../Buscar/?buscar=$search&buscar-tipo=usuarios\">Usuarios</a>";
                echo '</span>';
            }else{
                echo '<span class="movil-option-selected">';
                echo "Usuarios";
                echo '</span>';
            }
            if($searchtype!="materias"){
                echo '<span class="movil-option">';
                echo "<a href=\"../Buscar/?buscar=$search&buscar-tipo=materias\">Materias</a>";
                echo '</span>';
            }else{
                echo '<span class="movil-option-selected">';
                echo "Materias";
                echo '</span>';
            }
            if($searchtype!="profesores"){
                echo '<span class="movil-option">';
                echo "<a href=\"../Buscar/?buscar=$search&buscar-tipo=profesores\">Profesores</a>";
                echo '</span>';
            }else{
                echo '<span class="movil-option-selected">';
                echo "Profesores";
                echo '</span>';
            }
        ?>

    </div>
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
                        <a href="materia?id=<?php echo $result->Id_materia;?>"><?php echo $result->Nombre_materia;?></a>
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