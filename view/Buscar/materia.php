<div class="espacio">
    <div class="frame">
        <span class="califica">¡Apoya a tu hermano estudiante! <a href="../Calificar/"><img src="../images/ico-man-buena.PNG" alt="manzana" width="25px">Calificar</a></span>
        <span class="semestre">Materia de <?php echo $subjectsem;?>° Semestre</span>
        <h2><?php echo $subjectname;?></h2>
        <?php
            if($porcetaje_aprobados!=null){
        ?>
        <div class="aprobacion">
            <span class="apb">¡El <?php echo round($porcetaje_aprobados);?>% de los alumnos pasan esta materia!</span>
        </div>
        <div class="profesores">
            <div class="lista-profesores">
                <span class="titulo-opcion">Profesores:</span>
                <?php
                    foreach($resultados_profesores as $profesores){
                        echo "<span class=\"profesor\"><a href=\"profesor?id=$profesores->Id\">";
                        echo $profesores->Nombre;
                        echo '</a></span>';
                    }
                ?>
            </div>
            <div class="opciones">
                <div class="mejor-opcion">
                    <span class="titulo-opcion">Mejor opción:</span>
                    <?php if($mejor_profesor_manzanas!=null){?>
                        <span class="profesor-opcion"><a href="profesor?id=<?php echo $mejor_profesor;?>"><?php echo $mejor_profesor_nombre;?></a></span>
                        <span class="manzanas-opcion"><?php echo $mejor_profesor_manzanas;?> <img src="../images/ico-man-buena.PNG" alt="manzana" width="25px"> recibidas en esta materia</span>
                    <?php }else{ ?>
                        <span class="no-info">
                            <i>Aún no hay profesores con manzanas buenas</i>
                        </span>
                    <?php } ?>
                </div>
                <div class="peor-opcion">
                    <span class="titulo-opcion">Peor opción:</span>
                    <?php if($peor_profesor_manzanas!=null){?>
                        <span class="profesor-opcion"><a href="profesor?id=<?php echo $peor_profesor;?>"><?php echo $peor_profesor_nombre;?></a></span>
                        <span class="manzanas-opcion"><?php echo $peor_profesor_manzanas;?> <img src="../images/ico-man-mala.PNG" alt="manzana" width="25px"> recibidas en esta materia</span>
                    <?php }else{ ?>
                        <span class="no-info">
                            <i>Aún no hay profesores con manzanas malas</i>
                        </span>
                    <?php } ?>
                </div>
            </div>
            <hr>
            <div class="comentarios">
                <span class="titulo-comentarios">Opiniones:</span>
                <?php
                    foreach($resultados_opiniones as $opiniones){
                        echo '<div class="calificacion">';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span>Para <a href=\"profesor?id=$opiniones->Profesor\">$opiniones->Nombre</a></span>";
                        echo '</div>';
                    }
                    require("../view/Buscar/paginacion_materia.php");

                
                ?>
            </div>
        </div>
        <?php
            }else{
        ?>
        <div class="sin-info">
            <span class="no-info">
                <i>Aún no hay información acerca de esta materia</i>
            </span>
        </div>
        <?php
            }
        ?>
    </div>
</div>