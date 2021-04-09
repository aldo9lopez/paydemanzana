<div class="espacio">
    <div class="area">
        <?php
            require_once("../model/Tu_media_manzana/ver_info.php");
        ?>
        <div class="principal-info">
            <img src="../images/logo-media-m.PNG" alt="inicio-media-m" width="400px">
            <h2>Bienvenido</h2>
            <p class="instrucciones"><b>¡Encuentra a tu media manzana!</b><br>Sigue estos sencillos pasos para que encuentres a tu pareja ideal, o al menos de los que estudian en el tec:</p>
            <p class="instrucciones-lista">
                1. Pon una sexy foto de perfil, tu signo zodiacal y tus redes sociales<br>
                2. Selecciona el género de tu media manzana<br>
                3. Contesta cada test que aparece a continuación<br>
                4. Da click en "Buscar mi media manzana"<br>
            </p>
            <hr>
            <div class="foto-perfil">
                <form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")); ?>" method="post" class="upload-form" enctype="multipart/form-data">
                    <div class="form-flex">
                        <div class="head-info">
                            <label for="check-tit"><b>Tu foto de perfil <i class="material-icons" id="flecha-1">arrow_drop_down</i></b></label>
                            <input type="checkbox" name="check-tit" id="check-tit" onchange="mostrarDivs(1);">
                            <div class="dentro" id="form-1" style="display: none;">
                                <div class="imagePreview" id="imagePreview">
                                    <img src="../uploads/profile-images/<?php echo $profileimage; ?>" alt="imagen-perfil" class="imagen-perfil" width="150px">
                                </div>
                                <label for="inpFile">Seleccionar imagen</label>
                                <input type="file" name="inpFile" size="20" id="inpFile" class="upload-file" accept="image/*" data-max-size="5000000">
                            </div>
                        </div>
                        <div class="signo">
                            <label for="check-signo"><b>Selecciona tu signo zodiacal <i class="material-icons" id="flecha-2">arrow_drop_down</i></b></label>
                            <input type="checkbox" name="check-signo" id="check-signo" onchange="mostrarDivs(2);">
                            
                            <div class="dentro" id="form-2" style="display: none;">
                                <select name="signo" id="signo">
                                    <option value="1" <?php
                                        if($signo_z=='Aries'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Aries</option>
                                    <option value="2" <?php
                                        if($signo_z=='Tauro'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Tauro</option>
                                    <option value="3" <?php
                                        if($signo_z=='Géminis'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Géminis</option>
                                    <option value="4" <?php
                                        if($signo_z=='Cáncer'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Cáncer</option>
                                    <option value="5" <?php
                                        if($signo_z=='Leo'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Leo</option>
                                    <option value="6" <?php
                                        if($signo_z=='Virgo'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Virgo</option>
                                    <option value="7" <?php
                                        if($signo_z=='Libra'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Libra</option>
                                    <option value="8" <?php
                                        if($signo_z=='Escorpio'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Escorpio</option>
                                    <option value="9" <?php
                                        if($signo_z=='Sagitario'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Sagitario</option>
                                    <option value="10" <?php
                                        if($signo_z=='Capricornio'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Capricornio</option>
                                    <option value="11" <?php
                                        if($signo_z=='Acuario'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Acuario</option>
                                    <option value="12" <?php
                                        if($signo_z=='Piscis'){
                                            echo 'selected';
                                        }
                                    
                                    ?> >Piscis</option>
                                </select>
                            </div>
                        </div>
                        <div class="redes">
                            <label for="check-redes"><b>Tus redes sociales <i class="material-icons"  id="flecha-3">arrow_drop_down</i></b></label>
                            <input type="checkbox" name="check-redes" id="check-redes" onchange="mostrarDivs(3);">
                            <div class="dentro" id="form-3" style="display: none;">
                                <textarea name="redes" id="redes" cols="20" rows="5"><?php echo $redes_s;?></textarea>
                            </div>
                        </div>
                        <div class="preferencias">
                            <label for="check-pref"><b>Estoy buscando: <i class="material-icons"  id="flecha-4">arrow_drop_down</i></b></label>
                            <input type="checkbox" name="check-pref" id="check-pref" onchange="mostrarDivs(4);">
                            
                            <div class="dentro" id="form-4" style="display: none;">
                                <select name="pref" id="pref">
                                    <option value="1" <?php
                                        if($pref=='Hombres'){
                                            echo 'selected';
                                        }
                                    ?> >Hombres</option>
                                    <option value="2" <?php
                                        if($pref=='Mujeres'){
                                            echo 'selected';
                                        }
                                    ?> >Mujeres</option>
                                    <option value="3" <?php
                                        if($pref=='Ambos'){
                                            echo 'selected';
                                        }
                                    ?> >Ambos</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="boton">
                        <input type="submit" value="Guardar cambios" name="enviar">
                    </div>
                </form>
            </div>
            <hr>
            <div class="tests">
                <div class="test-corazon">
                    <img src="../images/media-manzana-test-corazon.PNG" alt="corazon" width="100px">
                    <span class="titulo-test"><b>Test del corazón</b></span>
                    <a href="cuestionario?tipo=1"><?php
                        if($mm_count_t1>0){
                            echo 'Modificar test';
                        }else{
                            echo 'Tomar test';
                        }
                    ?></a>
                </div>

                <div class="test-mente">
                    <img src="../images/media-manzana-test-mente.png" alt="mente" width="100px">
                    <span class="titulo-test"><b>Test de la mente</b></span>
                    <a href="cuestionario?tipo=2"><?php
                        if($mm_count_t2>0){
                            echo 'Modificar test';
                        }else{
                            echo 'Tomar test';
                        }
                    ?></a>
                </div>

                <div class="test-personal">
                    <img src="../images/media-manzana-test-personal.PNG" alt="personal" width="100px">
                    <span class="titulo-test"><b>Test personal</b></span>
                    <a href="cuestionario?tipo=3"><?php
                        if($mm_count_t3>0){
                            echo 'Modificar test';
                        }else{
                            echo 'Tomar test';
                        }
                    ?></a>
                </div>
            </div>
            <hr>
            <div class="boton">
                <a href="#">Buscar mi media manzana</a>
            </div>
        </div>
    </div>
</div>