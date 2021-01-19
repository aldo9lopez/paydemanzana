<div class="espacio">
    <div class="frame">
        <span class="califica">¡Apoya a tu hermano estudiante! <a href="../Calificar/"><img src="../images/ico-man-buena.PNG" alt="manzana" width="25px">Calificar</a></span>
        <span class="prefix">
            <?php 
                if($teachergender=="Femenino"){
                    echo "Profesora";
                }else{
                    echo "Profesor";
                }
            
            ?>
        </span>
        <h2><span><?php echo $teachertitle;?></span><?php echo $teachername;?></h2>
        <?php
            if($porcetaje_aprobados!=null){
        ?>
        <div class="profesor-stats">
                <span class="estrellas"><?php echo round($teacher_estrellas,2); ?><span class="estrella">★</span></span>|
                <span class="manzanas-buenas"><?php echo $teacher_manzanas_buenas; ?> <img src="../images/manzana-buena.png" alt="manzana" height="27px"></span>|
                <span class="manzanas-malas"><?php echo $teacher_manzanas_malas; ?> <img src="../images/manzana-mala.png" alt="manzana" height="27px"></span>
        </div>
        <div class="aprobacion">
            <span class="apb">¡El <?php echo round($porcetaje_aprobados);?>% de los alumnos pasan con
            <?php if($teachergender=="Femenino"){
                echo "esta profesora";
            }else{
                echo "este profesor";
            }
            
            ?>!</span>
        </div>
        
        <div class="lista-materia">
            <span class="titulo-opcion">Materias:</span>
            <?php
                $i=0;
                foreach($resultados_materias as $materia){
                    echo "<span class=\"materia\"><a href=\"materia?id=$materia->Id\">";
                    echo $materia->Nombre;
                    echo '</a></span>';
                    $i++;
                }
                if($i==0){
                    echo '<i>Este profesor aún no tiene materias que coincidan con tu carrera</i>';
                }
            ?>
        </div>

        <hr>
        
        <div class="comentarios">
            <span class="titulo-comentarios">Opiniones:</span>
            <div class="filtrar-com">
                <label for="estrellas-todos" id="est-todos">Todas</label>
                <input type="radio" name="estrellas" id="estrellas-todos" onclick="changeComentarios(6);">
                <label for="estrellas-5" id="est-5">★★★★★</label>
                <input type="radio" name="estrellas" id="estrellas-5" onclick="changeComentarios(5);">
                <label for="estrellas-4" id="est-4">★★★★</label>
                <span class="responsive">
                <input type="radio" name="estrellas" id="estrellas-4" onclick="changeComentarios(4);">
                <label for="estrellas-3" id="est-3">★★★</label>
                <input type="radio" name="estrellas" id="estrellas-3" onclick="changeComentarios(3);">
                <label for="estrellas-2" id="est-2">★★</label>
                <input type="radio" name="estrellas" id="estrellas-2" onclick="changeComentarios(2);">
                <label for="estrellas-1" id="est-1">★</label>
                <input type="radio" name="estrellas" id="estrellas-1" onclick="changeComentarios(1);">
                </span>
            </div>
            <div class="com-todos" id="com-todos">
                <?php
                    foreach($comentarios_general as $opiniones){
                        echo '<div class="calificacion">';
                        echo '<span class="estrellas">';
                        for($i=1;$i<=$opiniones->Estrellas;$i++){
                            echo '★';
                        }
                        echo '</span>';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span class=\"materia\">$opiniones->Materia</span>";
                        echo '</div>';
                    }
                    require("../view/Buscar/paginacion_profesor.php");
                    if(count($comentarios_general)==0){
                        echo '<p>No hay comentarios que mostrar</p>';
                    }
                ?>
            </div>
            <div class="com-5estrellas" id="com-5estrellas" style="display: none;">
                <?php
                    foreach($comentarios_5estrellas  as $opiniones){
                        echo '<div class="calificacion">';
                        echo '<span class="estrellas">';
                        echo '★★★★★';
                        echo '</span>';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span  class=\"materia\">$opiniones->Materia</span>";
                        echo '</div>';
                    }
                    
                    if(count($comentarios_5estrellas)==0){
                        echo '<p>No hay comentarios que mostrar</p>';
                    }
                ?>
            </div>
            <div class="com-4estrellas" id="com-4estrellas" style="display: none;">
                <?php
                    foreach($comentarios_4estrellas  as $opiniones){
                        echo '<div class="calificacion">';
                        echo '<span class="estrellas">';
                        echo '★★★★';
                        echo '</span>';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span  class=\"materia\">$opiniones->Materia</span>";
                        echo '</div>';
                    }
                    
                    if(count($comentarios_4estrellas)==0){
                        echo '<p>No hay comentarios que mostrar</p>';
                    }
                ?>
            </div>
            <div class="com-3estrellas" id="com-3estrellas" style="display: none;">
                <?php
                    foreach($comentarios_3estrellas  as $opiniones){
                        echo '<div class="calificacion">';
                        echo '<span class="estrellas">';
                        echo '★★★';
                        echo '</span>';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span  class=\"materia\">$opiniones->Materia</span>";
                        echo '</div>';
                    }
                    
                    if(count($comentarios_3estrellas)==0){
                        echo '<p>No hay comentarios que mostrar</p>';
                    }
                ?>
            </div>
            <div class="com-2estrellas" id="com-2estrellas" style="display: none;">
                <?php
                    foreach($comentarios_2estrellas  as $opiniones){
                        echo '<div class="calificacion">';
                        echo '<span class="estrellas">';
                        echo '★★';
                        echo '</span>';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span  class=\"materia\">$opiniones->Materia</span>";
                        echo '</div>';
                    }
                    
                    if(count($comentarios_2estrellas)==0){
                        echo '<p>No hay comentarios que mostrar</p>';
                    }
                ?>
            </div>
            <div class="com-1estrellas" id="com-1estrellas" style="display: none;">
                <?php
                    foreach($comentarios_1estrellas  as $opiniones){
                        echo '<div class="calificacion">';
                        echo '<span class="estrellas">';
                        echo '★';
                        echo '</span>';
                        echo "<p class=\"opinion\"><i>\"$opiniones->Opinion\"</i></p>";
                        echo "<span  class=\"materia\">$opiniones->Materia</span>";
                        echo '</div>';
                    }
                    
                    if(count($comentarios_1estrellas)==0){
                        echo '<p>No hay comentarios que mostrar</p>';
                    }
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