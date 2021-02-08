<?php
    $subjectstatus = "Ordinario";
    switch($i){
        case 0: $subjectstatus = "Ordinario";
        break;
        case 1: $subjectstatus = "Repetición";
        break;
        case 2: $subjectstatus = "Especial";
        break;
    }
?>


<div class="nueva-calif" id="nueva-calif-<?php echo $i+1;?>">

<hr>
    <h4><?php echo $subjectstatus;?> - <span class="estatus" id="estatus-<?php echo $i+1;?>">Reprobada</span></h4>
    <label class="title">¿Con qué profesor llevaste la materia?</label>
    <select id="required-<?php echo $i+1;?>" name="profesor-<?php echo $i+1;?>" class="form-control form-control-chosen-required" data-placeholder="Escribe el nombre del profesor...">
        <option></option>
        <?php
            foreach($registros as $profesores){
                echo "<option value=\"$profesores->Id_profesor\">";
                echo "$profesores->Titulo $profesores->Nombre";
                echo '</option>';
            }
        ?>
    </select>
    <p class="info-noesta">Si tu profesor no aparece en la lista envia un correo a <a href="mailto:ayuda@paydmanzana.com">ayuda@paydmanzana.com</a></p>
    <label class="title">Calificación</label>
    <p class="clasificacion">
          <input id="radio1-<?php echo $i+1;?>" type="radio" name="estrellas-<?php echo $i+1;?>" value="5"><!--
          --><label class="star" for="radio1-<?php echo $i+1;?>">★</label><!--
          --><input id="radio2-<?php echo $i+1;?>" type="radio" name="estrellas-<?php echo $i+1;?>" value="4"><!--
          --><label class="star" for="radio2-<?php echo $i+1;?>">★</label><!--
          --><input id="radio3-<?php echo $i+1;?>" type="radio" name="estrellas-<?php echo $i+1;?>" value="3"><!--
          --><label class="star" for="radio3-<?php echo $i+1;?>">★</label><!--
          --><input id="radio4-<?php echo $i+1;?>" type="radio" name="estrellas-<?php echo $i+1;?>" value="2"><!--
          --><label class="star" for="radio4-<?php echo $i+1;?>">★</label><!--
          --><input id="radio5-<?php echo $i+1;?>" type="radio" name="estrellas-<?php echo $i+1;?>" value="1"><!--
          --><label class="star" for="radio5-<?php echo $i+1;?>">★</label>
    </p>
    <label class="title" for="opinion">Escribe una opinión (opcional)</label>
    <textarea name="opinion-<?php echo $i+1;?>" id="opinion-<?php echo $i+1;?>" cols="6" rows="4" maxlength="300"></textarea>
    <label class="title">Manzanas (opcional)</label>
    <div class="manzana-B">
        <span>¿Este profesor es la mejor opción para esta materia?</span>
        <input type="checkbox" id="myCheckbox1-<?php echo $i+1;?>" name="manzanaBuena-<?php echo $i+1;?>" onchange="manzanaB();"/>
        <label class="manzana" for="myCheckbox1-<?php echo $i+1;?>"><img height="100px" src="../images/manzana-buena.png" /></label>
        <span>Dar manzana buena</span>
        </div>
    <div class="manzana-M">
        <span>¿Este profesor es la peor opción para esta materia?</span>
        <input type="checkbox" id="myCheckbox2-<?php echo $i+1;?>" name="manzanaMala-<?php echo $i+1;?>" onchange="manzanaM();"/>
        <label class="manzana" for="myCheckbox2-<?php echo $i+1;?>"><img height="100px" src="../images/manzana-mala.png" /></label>
        <span>Dar manzana mala</span>
    </div>
</div>