<?php
    require_once("../model/Calificar/ver_calificacion.php");

?>
<div class="espacio">
    <div class="frame">
        <h3>Calificar / <?php echo $profilecareer;?> / <?php echo $subjectname;?></h3>
        <?php
            require_once("../model/Calificar/obtener_profesores.php");
            if($reviews<1){
        ?>
        
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")."?materia=$materia"); ?>" method="post" onsubmit="return validarCalificacion();">
                <label for="#">¿Cuántas veces tomaste la materia?</label>
                <select name="n-veces" id="n-veces" onchange="cambiarveces();">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php
                    for($i=0;$i<3;$i++){
                        require("../view/Calificar/nueva_calificacion.php");
                    }
                ?>
                <hr>
                <input type="hidden" name="materia" value="<?php echo $materia;?>">
                <p class="leyenda-calis">*Las calificaciones son anónimas</p>
                <input type="submit" name="calificar" value="Calificar">

            </form>
        <?php
            }else{
                require("../view/Calificar/editar_calificacion.php");
            }
        ?>
    </div>
</div>