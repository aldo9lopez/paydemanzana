<div class="espacio">
    <div class="area">
        <?php
        require_once("../model/Usuarios/config.php")
        ?>
        <div class="config">
            <h2>Configuración</h2>
            <div class="nombre">
                <label for="check-nombre">Cambiar nombre <span><?php echo $profilename; ?></span></label>
                <input type="checkbox" name="check-nombre" id="check-nombre" onchange="mostrarDivs(1);">
                <form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")); ?>" id="form-1" method="post" style="display: none;" onsubmit="return validarNombre();">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" maxlength="60" value="<?php echo $perfil_name; ?>">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" maxlength="80" value="<?php echo $perfil_apellido; ?>">
                    <input type="submit" value="Guardar" name="enviar-nombre">
                </form>
            </div>

            <div class="sexo">
                <label for="check-sexo">Cambiar sexo <span><?php echo $perfil_sexo; ?></span></label>
                <input type="checkbox" name="check-sexo" id="check-sexo" onchange="mostrarDivs(2);">
                <form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")); ?>" id="form-2" method="post" style="display: none;">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo">
                        <option value="1" id="hombre" <?php
                            if($perfil_sexo=="Masculino"){
                                echo "selected";
                            }
                        ?>>Hombre</option>
                        <option value="2" id="mujer" <?php
                            if($perfil_sexo=="Femenino"){
                                echo "selected";
                            }
                        ?>>Mujer</option>
                        <option value="3" <?php
                            if($perfil_sexo=="Sin especificar"){
                                echo "selected";
                            }
                        ?>>No especificado</option>
                    </select>
                    <input type="submit" value="Guardar" name="enviar-sexo">
                </form>
            </div>

            
            <div class="anio">
                <label for="check-anio">Cambiar ingreso <span><?php echo $anio_ingreso; ?></span></label>
                <input type="checkbox" name="check-anio" id="check-anio" onchange="mostrarDivs(3);">
                <form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")); ?>" id="form-3" method="post" style="display: none;">
                    <label for="anio">Año de ingreso</label>
                    <select name="anio" id="anio">
                        <option value="2021" <?php
                            if($anio_ingreso==2021){
                                echo 'selected';
                            }
                        ?>>2021</option>
                        <option value="2020"<?php
                            if($anio_ingreso==2020){
                                echo 'selected';
                            }
                        ?>>2020</option>
                        <option value="2019"<?php
                            if($anio_ingreso==2019){
                                echo 'selected';
                            }
                        ?>>2019</option>
                        <option value="2018"<?php
                            if($anio_ingreso==2018){
                                echo 'selected';
                            }
                        ?>>2018</option>
                        <option value="2017"<?php
                            if($anio_ingreso==2017){
                                echo 'selected';
                            }
                        ?>>2017</option>
                        <option value="2016"<?php
                            if($anio_ingreso==2016){
                                echo 'selected';
                            }
                        ?>>2016</option>
                        <option value="2015"<?php
                            if($anio_ingreso==2015){
                                echo 'selected';
                            }
                        ?>>2015</option>
                        <option value="2014"<?php
                            if($anio_ingreso==2014){
                                echo 'selected';
                            }
                        ?>>2014</option>
                        <option value="2013"<?php
                            if($anio_ingreso==2013){
                                echo 'selected';
                            }
                        ?>>2013</option>
                    </select>
                    <input type="submit" value="Guardar" name="enviar-anio">
                </form>
            </div>

            <div class="contrasena">
                <label for="check-pass">Cambiar contraseña</label>
                <input type="checkbox" name="check-pass" id="check-pass" onchange="mostrarDivs(4);">
                <form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")); ?>" id="form-4" method="post" style="display: none;" onsubmit="return validarPass();">
                    <label for="pass-act">Contraseña actual:</label>
                    <input type="password" name="pass-act" id="pass-act">
                    <label for="pass">Nueva contraseña:</label>
                    <input type="password" name="pass" id="pass">
                    <label for="pass2">Repite la contraseña:</label>
                    <input type="password" name="pass2" id="pass2">
                    <input type="submit" value="Guardar" name="enviar-pass">
                </form>
            </div>

        </div>
    </div>
</div>