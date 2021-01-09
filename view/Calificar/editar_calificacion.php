<?php
    require_once("../model/Calificar/obtener_calificaciones.php");
    $num_calif=1;
    foreach($filas as $calificaciones){
        ?>
        <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")."?materia=$materia"); ?>" method="post">
            
            <div class="nueva-calif">
                <hr>
                <h4><?php 
                    switch($num_calif){
                        case 1:  echo "Ordinario";break;
                        case 2:  echo "Repetición";break;
                        case 3:  echo "Especial";break;
                    }
                
                ?> - <span class="estatus"><?php echo $calificaciones->Estatus;?></span></h4>
                <label class="title">Profesor:</label>
                <select id="required-<?php echo $num_calif;?>" name="profesor-<?php echo $num_calif;?>" class="form-control form-control-chosen-required" data-placeholder="Escribe el nombre del profesor...">
                    <option></option>
                    <?php
                        foreach($registros as $profesores){
                            echo "<option value=\"$profesores->Id_profesor\" ";
                            if($profesores->Id_profesor==$calificaciones->Profesor){
                                echo "selected ";
                            }
                            echo ">$profesores->Titulo $profesores->Nombre";
                            echo '</option>';
                        }
                    ?>
                </select>
                <label class="title">Calificación:</label>
                <p class="clasificacion">
                    <input id="radio1-<?php echo $num_calif;?>" type="radio" name="estrellas-<?php echo $num_calif;?>" value="5"
                    <?php
                        if($calificaciones->Estrellas==5){
                            echo " checked";
                        }
                    ?>
                    ><label class="star" for="radio1-<?php echo $num_calif;?>">★</label><!--
                    --><input id="radio2-<?php echo $num_calif;?>" type="radio" name="estrellas-<?php echo $num_calif;?>" value="4"
                    <?php
                        if($calificaciones->Estrellas==4){
                            echo " checked";
                        }
                    ?>
                    ><label class="star" for="radio2-<?php echo $num_calif;?>">★</label><!--
                    --><input id="radio3-<?php echo $num_calif;?>" type="radio" name="estrellas-<?php echo $num_calif;?>" value="3"
                    <?php
                        if($calificaciones->Estrellas==3){
                            echo " checked";
                        }
                    ?>
                    ><label class="star" for="radio3-<?php echo $num_calif;?>">★</label><!--
                    --><input id="radio4-<?php echo $num_calif;?>" type="radio" name="estrellas-<?php echo $num_calif;?>" value="2"
                    <?php
                        if($calificaciones->Estrellas==2){
                            echo " checked";
                        }
                    ?>
                    ><label class="star" for="radio4-<?php echo $num_calif;?>">★</label><!--
                    --><input id="radio5-<?php echo $num_calif;?>" type="radio" name="estrellas-<?php echo $num_calif;?>" value="1"
                    <?php
                        if($calificaciones->Estrellas==1){
                            echo " checked";
                        }
                    ?>
                    ><label class="star" for="radio5-<?php echo $num_calif;?>">★</label>
                </p>
                <label class="title" for="opinion">Opinión:</label>
                <textarea name="opinion-<?php echo $num_calif;?>" id="opinion-<?php echo $num_calif;?>" cols="6" rows="4" maxlength="300"><?php echo $calificaciones->Opinion;?></textarea>
                <label class="title">Manzanas (opcional)</label>
                <div class="manzana-B">
                    <span>¿Este profesor es la mejor opción para esta materia?</span>
                    <input type="checkbox" id="myCheckbox1-<?php echo $num_calif;?>" name="manzanaBuena-<?php echo $num_calif;?>" onchange="manzanaB();"
                    <?php
                        if($calificaciones->Manzana=="Buena"){
                            echo " checked";
                        }
                    ?>
                    ><label class="manzana" for="myCheckbox1-<?php echo $num_calif;?>"><img height="100px" src="../images/manzana-buena.png" /></label>
                    <span>Dar manzana buena</span>
                    </div>
                <div class="manzana-M">
                    <span>¿Este profesor es la peor opción para esta materia?</span>
                    <input type="checkbox" id="myCheckbox2-<?php echo $num_calif;?>" name="manzanaMala-<?php echo $num_calif;?>" onchange="manzanaM();"
                    <?php
                        if($calificaciones->Manzana=="Mala"){
                            echo " checked";
                        }
                    ?>
                    ><label class="manzana" for="myCheckbox2-<?php echo $num_calif;?>"><img height="100px" src="../images/manzana-mala.png" /></label>
                    <span>Dar manzana mala</span>
                </div>
                <input type="hidden" name="materia" value="<?php echo $materia;?>">
                <input type="hidden" name="num-calif" value="<?php echo $num_calif;?>">
                <input type="hidden" name="id-calif" value="<?php echo $calificaciones->Id_calificacion;?>">
                <input type="submit" name="editar" value="Guardar">
            </div>
        </form>

        <?php
        $num_calif++;
    }

?>