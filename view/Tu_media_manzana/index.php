<div class="espacio">
    <div class="area">
        <div class="principal-info">
            <img src="../images/logo-media-m.PNG" alt="inicio-media-m" width="400px">
            <h2>Bienvenido</h2>
            <p class="instrucciones"><b>¡Encuentra a tu media manzana!</b><br>Sigue estos sencillos pasos para que encuentres a tu pareja ideal, o al menos de los que estudian en el tec:</p>
            <p class="instrucciones-lista">
                1. Pon una sexy foto de perfil, tu signo zodiacal y tus redes sociales<br>
                2. Contesta cada test que aparece a continuación<br>
                3. Da click en "Buscar mi media manzana"<br>
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
                                    <option value="1">Aries</option>
                                    <option value="2">Tauro</option>
                                    <option value="3">Géminis</option>
                                    <option value="4">Cáncer</option>
                                    <option value="5">Leo</option>
                                    <option value="6">Virgo</option>
                                    <option value="7">Libra</option>
                                    <option value="8">Escorpio</option>
                                    <option value="9">Sagitario</option>
                                    <option value="10">Capricornio</option>
                                    <option value="11">Acuario</option>
                                    <option value="12">Piscis</option>
                                </select>
                            </div>
                        </div>
                        <div class="redes">
                            <label for="check-redes"><b>Tus redes sociales <i class="material-icons"  id="flecha-3">arrow_drop_down</i></b></label>
                            <input type="checkbox" name="check-redes" id="check-redes" onchange="mostrarDivs(3);">
                            <div class="dentro" id="form-3" style="display: none;">
                                <textarea name="redes" id="redes" cols="20" rows="5">Fb:
Ig:</textarea>
                            </div>
                        </div>
                        <div class="preferencias">
                            <label for="check-pref"><b>Estoy buscando: <i class="material-icons"  id="flecha-4">arrow_drop_down</i></b></label>
                            <input type="checkbox" name="check-pref" id="check-pref" onchange="mostrarDivs(4);">
                            
                            <div class="dentro" id="form-4" style="display: none;">
                                <select name="pref" id="pref">
                                    <option value="1">Hombres</option>
                                    <option value="2">Mujeres</option>
                                    <option value="3">Ambos</option>
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
                    <a href="cuestionario?tipo=1">Tomar test</a>
                </div>

                <div class="test-mente">
                    <img src="../images/media-manzana-test-mente.png" alt="mente" width="100px">
                    <span class="titulo-test"><b>Test de la mente</b></span>
                    <a href="cuestionario?tipo=2">Tomar test</a>
                </div>

                <div class="test-personal">
                    <img src="../images/media-manzana-test-personal.PNG" alt="personal" width="100px">
                    <span class="titulo-test"><b>Test personal</b></span>
                    <a href="cuestionario?tipo=3">Tomar test</a>
                </div>
            </div>
            <hr>
            <div class="boton">
                <a href="#">Buscar mi media manzana</a>
            </div>
        </div>
    </div>
</div>