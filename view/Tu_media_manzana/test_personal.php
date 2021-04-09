<h3>Test personal</h3>
<form action="" method="post">
    <span class="pregunta">1. ¿Cuál de estos es tu deseo más profundo?</span>
    <label><input type="radio" name="q1" id="q1-1" value="1" <?php if($res_q1== 1){ echo 'checked'; } ?> >Amor verdadero</label>
    <label><input type="radio" name="q1" id="q1-2" value="2" <?php if($res_q1== 2){ echo 'checked'; } ?> >Dinero y fama</label>
    <label><input type="radio" name="q1" id="q1-3" value="3" <?php if($res_q1== 3){ echo 'checked'; } ?> >Paz interior y exterior</label>
    <label><input type="radio" name="q1" id="q1-4" value="4" <?php if($res_q1== 4){ echo 'checked'; } ?> >Crecimiento personal</label>

    <span class="pregunta">2. Dirías que eres una persona:</span>
    <label><input type="radio" name="q2" id="q2-1" value="1" <?php if($res_q2== 1){ echo 'checked'; } ?> >Poco emocional y muy privada</label>
    <label><input type="radio" name="q2" id="q2-2" value="2" <?php if($res_q2== 2){ echo 'checked'; } ?> >Bastante racional y a la vez sociable</label>
    <label><input type="radio" name="q2" id="q2-3" value="3" <?php if($res_q2== 3){ echo 'checked'; } ?> >Muy emocional y poco sociable</label>
    <label><input type="radio" name="q2" id="q2-4" value="4" <?php if($res_q2== 4){ echo 'checked'; } ?> >Guiada por sus sentimientos y extrovertida</label>

    <span class="pregunta">3. ¿Qué haces en tus tiempos libres? </span>
    <label><input type="radio" name="q3" id="q3-1" value="1" <?php if($res_q3== 1){ echo 'checked'; } ?> >Leer un libro</label>
    <label><input type="radio" name="q3" id="q3-2" value="2" <?php if($res_q3== 2){ echo 'checked'; } ?> >Ver una serie o película</label>
    <label><input type="radio" name="q3" id="q3-3" value="3" <?php if($res_q3== 3){ echo 'checked'; } ?> >Hacer ejercicio</label>
    <label><input type="radio" name="q3" id="q3-4" value="4" <?php if($res_q3== 4){ echo 'checked'; } ?> >Jugar videojuegos</label>

    <span class="pregunta">4. ¿Qué prefieres comer?</span>
    <label><input type="radio" name="q4" id="q4-1" value="1" <?php if($res_q4== 1){ echo 'checked'; } ?> >Sushi</label>
    <label><input type="radio" name="q4" id="q4-2" value="2" <?php if($res_q4== 2){ echo 'checked'; } ?> >Una ensalada</label>
    <label><input type="radio" name="q4" id="q4-3" value="3" <?php if($res_q4== 3){ echo 'checked'; } ?> >Unos taquitos</label>
    <label><input type="radio" name="q4" id="q4-4" value="4" <?php if($res_q4== 4){ echo 'checked'; } ?> >Unas alitas</label>

    <span class="pregunta">5. ¿Qué tipo de música te gusta más?</span>
    <label><input type="radio" name="q5" id="q5-1" value="1" <?php if($res_q5== 1){ echo 'checked'; } ?> >Banda MS</label>
    <label><input type="radio" name="q5" id="q5-2" value="2" <?php if($res_q5== 2){ echo 'checked'; } ?> >Guns N’ Roses</label>
    <label><input type="radio" name="q5" id="q5-3" value="3" <?php if($res_q5== 3){ echo 'checked'; } ?> >The Weeknd</label>
    <label><input type="radio" name="q5" id="q5-4" value="4" <?php if($res_q5== 4){ echo 'checked'; } ?> >Bad Bunny</label>
    <label><input type="radio" name="q5" id="q5-5" value="5" <?php if($res_q5== 5){ echo 'checked'; } ?> >Martin Garrix</label>

    <span class="pregunta">6. ¿Qué tan vicioso/a eres?</span>
    <label><input type="radio" name="q6" id="q6-1" value="1" <?php if($res_q6== 1){ echo 'checked'; } ?> >Bebo y fumo</label>
    <label><input type="radio" name="q6" id="q6-2" value="2" <?php if($res_q6== 2){ echo 'checked'; } ?> >No bebo ni fumo</label>
    <label><input type="radio" name="q6" id="q6-3" value="3" <?php if($res_q6== 3){ echo 'checked'; } ?> >Sólo bebo</label>
    <label><input type="radio" name="q6" id="q6-4" value="4" <?php if($res_q6== 4){ echo 'checked'; } ?> >Brownies de 4 días</label>
    
    <span class="pregunta">7. ¿Qué animal tienes o te gustaría tener de mascota?</span>
    <label><input type="radio" name="q7" id="q7-1" value="1" <?php if($res_q7== 1){ echo 'checked'; } ?> >Perro</label>
    <label><input type="radio" name="q7" id="q7-2" value="2" <?php if($res_q7== 2){ echo 'checked'; } ?> >Gato</label>
    <label><input type="radio" name="q7" id="q7-3" value="3" <?php if($res_q7== 3){ echo 'checked'; } ?> >Otro</label>
    <label><input type="radio" name="q7" id="q7-4" value="4" <?php if($res_q7== 4){ echo 'checked'; } ?> >Ninguno, no me gustan las mascotas</label>

    <span class="pregunta">8. ¿Qué categoría de películas es tu favorita?</span>
    <label><input type="radio" name="q8" id="q8-1" value="1" <?php if($res_q8== 1){ echo 'checked'; } ?> >Drama </label>
    <label><input type="radio" name="q8" id="q8-2" value="2" <?php if($res_q8== 2){ echo 'checked'; } ?> >Terror</label>
    <label><input type="radio" name="q8" id="q8-3" value="3" <?php if($res_q8== 3){ echo 'checked'; } ?> >Comedia</label>
    <label><input type="radio" name="q8" id="q8-4" value="4" <?php if($res_q8== 4){ echo 'checked'; } ?> >Comedia romántica</label>
    <label><input type="radio" name="q8" id="q8-5" value="5" <?php if($res_q8== 5){ echo 'checked'; } ?> >Acción/Ciencia ficción</label>

    <span class="pregunta">9. Si ganaras un millón de dólares. ¿Qué harías con el dinero?</span>
    <label><input type="radio" name="q9" id="q9-1" value="1" <?php if($res_q9== 1){ echo 'checked'; } ?> >Invertirlo en un negocio</label>
    <label><input type="radio" name="q9" id="q9-2" value="2" <?php if($res_q9== 2){ echo 'checked'; } ?> >Ayudar a mi familia o amigos</label>
    <label><input type="radio" name="q9" id="q9-3" value="3" <?php if($res_q9== 3){ echo 'checked'; } ?> >Comprar una casa y/o un carro de lujo</label>
    <label><input type="radio" name="q9" id="q9-4" value="4" <?php if($res_q9== 4){ echo 'checked'; } ?> >Viajar por todo el mundo</label>

    <span class="pregunta">10. ¿Cuál es tu gusto culposo?</span>
    <label><input type="radio" name="q10" id="q10-1" value="1" <?php if($res_q10== 1){ echo 'checked'; } ?> >Exprimir puntos negros o barros</label>
    <label><input type="radio" name="q10" id="q10-2" value="2" <?php if($res_q10== 2){ echo 'checked'; } ?> >Bailar cumbias raspadas</label>
    <label><input type="radio" name="q10" id="q10-3" value="3" <?php if($res_q10== 3){ echo 'checked'; } ?> >Espiar el facebook de mi ex</label>
    <label><input type="radio" name="q10" id="q10-4" value="4" <?php if($res_q10== 4){ echo 'checked'; } ?> >Orinar en la regadera</label>

    <input type="submit" value="Guardar" name="enviar-3">
</form>