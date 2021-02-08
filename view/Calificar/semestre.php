<div class="espacio">
    <div class="frame">
        <h3>Calificar / <?php echo $profilecareer;?> / Semestre <?php echo $semestre?></h3>
        <?php
            $calificadas=false;
            require("../model/Calificar/ver_materias.php");
            $calificadas=true;
            require("../model/Calificar/ver_materias.php");
        ?>
        <p>*Califica la materia una vez que la hayas pasado</p>
        <a href="../Calificar/" class="atras"><i class="material-icons">keyboard_arrow_left</i> Todos los semestres</a>
    </div>
</div>