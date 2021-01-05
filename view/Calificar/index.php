<div class="espacio">
    <div class="frame">
        <h3>Calificar / <?php echo $careername;?></h3>
        <?php
            for($i=1;$i<=$careersem;$i++){
                require("../model/Calificar/obtener_materias_calificadas.php");
                ?>
                <a href="semestre?id=<?php echo $i;?>">
                    <div class="semestres">
                        <span class="info-sem">Semestre <?php echo $i;?></span>
                        <span class="info-mat">Materias calificadas:</span>
                        <span class="info-materias"><?php echo $materias_calif;?> de <?php echo $materias_tot;?></span>
                    </div>
                </a>
                
                <?php
            }
        ?>
    </div>
</div>