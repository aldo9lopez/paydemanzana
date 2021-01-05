<?php
    require_once("../model/Calificar/ver_calificacion.php");

?>
<div class="espacio">
    <div class="frame">
        <h3>Calificar / <?php echo $profilecareer;?> / <?php echo $subjectname?></h3>
        <form action="#" method="post">
        <?php
            if($reviews<1){
        ?>
            <label for="#">¿Cuántas veces tomaste la materia?</label>
            <select name="n-veces" id="n-veces">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        <?php
            }
        ?>
        </form>
    </div>
</div>