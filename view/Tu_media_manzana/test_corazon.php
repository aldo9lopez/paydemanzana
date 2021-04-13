<h3>Test del corazón</h3>
<form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")."?tipo=$test_tipo"); ?>" method="post" id="formulario">
    <span class="pregunta">1. ¿Crees en el amor a primera vista?</span>
    <label><input type="radio" name="q1" id="q1-1" value="1" <?php if($res_q1== 1){ echo 'checked'; } ?> >Si</label>
    <label><input type="radio" name="q1" id="q1-2" value="2" <?php if($res_q1== 2){ echo 'checked'; } ?> >No</label>
    <label><input type="radio" name="q1" id="q1-3" value="3" <?php if($res_q1== 3){ echo 'checked'; } ?> >Si, a menos que sea libra</label>
    
    <span class="pregunta">2. ¿Qué te atrae más de una persona?</span>
    <label><input type="radio" name="q2" id="q2-1" value="1" <?php if($res_q2== 1){ echo 'checked'; } ?> >Su dinero</label>
    <label><input type="radio" name="q2" id="q2-2" value="2" <?php if($res_q2== 2){ echo 'checked'; } ?> >Su inteligencia</label>
    <label><input type="radio" name="q2" id="q2-3" value="3" <?php if($res_q2== 3){ echo 'checked'; } ?> >Su sentido del humor</label>
    <label><input type="radio" name="q2" id="q2-4" value="4" <?php if($res_q2== 4){ echo 'checked'; } ?> >Su físico</label>

    <span class="pregunta">3. ¿Practicarías la "No monogamia"?</span>
    <label><input type="radio" name="q3" id="q3-1" value="1" <?php if($res_q3== 1){ echo 'checked'; } ?> >Sí</label>
    <label><input type="radio" name="q3" id="q3-2" value="2" <?php if($res_q3== 2){ echo 'checked'; } ?> >No</label>
    <label><input type="radio" name="q3" id="q3-3" value="3" <?php if($res_q3== 3){ echo 'checked'; } ?> >¿Qué es eso?</label>

    <span class="pregunta">4. ¿Beso de tres?</span>
    <label><input type="radio" name="q4" id="q4-1" value="1" <?php if($res_q4== 1){ echo 'checked'; } ?> >Uff claro</label>
    <label><input type="radio" name="q4" id="q4-2" value="2" <?php if($res_q4== 2){ echo 'checked'; } ?> >Depende…</label>
    <label><input type="radio" name="q4" id="q4-3" value="3" <?php if($res_q4== 3){ echo 'checked'; } ?> >No</label>

    <span class="pregunta">5. ¿Tendrías relaciones sexuales en la primera cita?</span>
    <label><input type="radio" name="q5" id="q5-1" value="1" <?php if($res_q5== 1){ echo 'checked'; } ?> >¡Claro! no pasa nada</label>
    <label><input type="radio" name="q5" id="q5-2" value="2" <?php if($res_q5== 2){ echo 'checked'; } ?> >Sólo si se dan bien las cosas</label>
    <label><input type="radio" name="q5" id="q5-3" value="3" <?php if($res_q5== 3){ echo 'checked'; } ?> >No, se necesita tiempo para eso</label>

    <span class="pregunta">6. ¿Te han roto el corazón?</span>
    <label><input type="radio" name="q6" id="q6-1" value="1" <?php if($res_q6== 1){ echo 'checked'; } ?> >Si, más de una vez</label>
    <label><input type="radio" name="q6" id="q6-2" value="2" <?php if($res_q6== 2){ echo 'checked'; } ?> >Una vez</label>
    <label><input type="radio" name="q6" id="q6-3" value="3" <?php if($res_q6== 3){ echo 'checked'; } ?> >No</label>

    <span class="pregunta">7. ¿Cómo sería tu futuro con tu pareja?</span>
    <label><input type="radio" name="q7" id="q7-1" value="1" <?php if($res_q7== 1){ echo 'checked'; } ?> >Casarme y tener hijos</label>
    <label><input type="radio" name="q7" id="q7-2" value="2" <?php if($res_q7== 2){ echo 'checked'; } ?> >Viajar por todo el mundo</label>
    <label><input type="radio" name="q7" id="q7-3" value="3" <?php if($res_q7== 3){ echo 'checked'; } ?> >Cumplir mis fantasías sexuales</label>
    <label><input type="radio" name="q7" id="q7-4" value="4" <?php if($res_q7== 4){ echo 'checked'; } ?> >Crear un negocio juntos</label>
    
    <span class="pregunta">8. La cita perfecta es:</span>
    <label><input type="radio" name="q8" id="q8-1" value="1" <?php if($res_q8== 1){ echo 'checked'; } ?> >Unas copas y bailar</label>
    <label><input type="radio" name="q8" id="q8-2" value="2" <?php if($res_q8== 2){ echo 'checked'; } ?> >Visitar un museo, tomar un café y hablar de la vida</label>
    <label><input type="radio" name="q8" id="q8-3" value="3" <?php if($res_q8== 3){ echo 'checked'; } ?> >Ir al cine</label>
    <label><input type="radio" name="q8" id="q8-4" value="4" <?php if($res_q8== 4){ echo 'checked'; } ?> >Un concierto o una buena fiesta</label>
    
    <span class="pregunta">9. Lo más importante en una relación es:</span>
    <label><input type="radio" name="q9" id="q9-1" value="1" <?php if($res_q9== 1){ echo 'checked'; } ?> >Las nuevas experiencias</label>
    <label><input type="radio" name="q9" id="q9-2" value="2" <?php if($res_q9== 2){ echo 'checked'; } ?> >El compromiso</label>
    <label><input type="radio" name="q9" id="q9-3" value="3" <?php if($res_q9== 3){ echo 'checked'; } ?> >La intimidad y la pasión</label>
    <label><input type="radio" name="q9" id="q9-4" value="4" <?php if($res_q9== 4){ echo 'checked'; } ?> >La confianza</label>
    <label><input type="radio" name="q9" id="q9-5" value="5" <?php if($res_q9== 5){ echo 'checked'; } ?> >Comunicación</label>

    <span class="pregunta">10. Lo peor en una relación es:</span>
    <label><input type="radio" name="q10" id="q10-1" value="1" <?php if($res_q10== 1){ echo 'checked'; } ?> >La falta de compromiso</label>
    <label><input type="radio" name="q10" id="q10-2" value="2" <?php if($res_q10== 2){ echo 'checked'; } ?> >La falta de relaciones sexuales placenteras</label>
    <label><input type="radio" name="q10" id="q10-3" value="3" <?php if($res_q10== 3){ echo 'checked'; } ?> >El engaño</label>
    <label><input type="radio" name="q10" id="q10-4" value="4" <?php if($res_q10== 4){ echo 'checked'; } ?> >La monotonía</label>

    <input type="submit" value="Guardar" name="enviar-1">

</form>