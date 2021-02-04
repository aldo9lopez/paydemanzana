<div class="espacio">
    <div class="area">
        <?php
        require_once("../model/data/popularidad.php");
        require_once("../model/Usuarios/ver_popularidad.php");
        ?>
        <div class="info-stat">
            <h2>Popularidad</h2>
            <p class="leyenda">Esta página sólo la puedes ver tú</p>
            <div class="posiciones">
                <div class="carrera" name="circulo-<?php echo $stat_car_num;?>">
                    <h4 class="titulo"><?php echo $profilecareer; ?></h4>
                    <span class="stat"><?php echo $stat_carrera; ?></span>
                    <div class="posicion">
                        <span class="pos">Posición:</span>
                        <span class="numero"><?php echo $pos_carrera; ?></span>
                        <span class="total">de <?php echo $total_carrera; ?></span>
                    </div>
                </div>

                <div class="general" name="circulo-<?php echo $stat_gen_num;?>">
                    <h4 class="titulo">Escuela</h4>
                    <span class="stat"><?php echo $stat_general; ?></span>
                    <div class="posicion">
                        <span class="pos">Posición:</span>
                        <span class="numero"><?php echo $pos_general; ?></span>
                        <span class="total">de <?php echo $total_general; ?></span>
                    </div>
                </div>
            </div>
            <table class="imagenes">
                <tr>
                    <td colspan="2"><strong>Obtén estas insignias en tu perfil de acuerdo a tu popularidad</strong></td>
                </tr>
                <tr>
                    <td><img src="../images/top-1.png" alt="top-1" width="50px"></td>
                    <td>1er lugar de popularidad</td>
                </tr>
                <tr>
                    <td><img src="../images/top-5.png" alt="top-5" width="50px"></td>
                    <td>Lugares del 2-5 de popularidad</td>
                </tr>
                <tr>
                    <td><img src="../images/top-10.png" alt="top-10" width="50px"></td>
                    <td>Lugares del 6-10 de popularidad</td>
                </tr>
            </table>
            <hr>
            <div class="info-pop">
                <h3>¿Cómo se calcula la popularidad?</h3>
                <p>La popularidad se calcula obteniendo el número de reacciones por cada post que publicas.
                <br>Aunque realmente no es importante, <strong>¿o sí?</strong></p>
            
            </div>
        </div>
    </div>
</div>