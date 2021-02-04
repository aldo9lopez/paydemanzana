<div class="espacio">
    <div class="area">
        <div class="principal-perfil">
            <?php
            require_once("../model/data/popularidad.php");
            require_once("../model/Usuarios/info_miperfil.php");
            ?>
            <form action="<?php echo (basename($_SERVER['PHP_SELF'], ".php")); ?>" method="post" class="upload-form" enctype="multipart/form-data">
                <div class="head-info">
                    <h2><?php echo $profilename; ?></h2>
                    <span class="tit">Foto de perfil</span>
                    <div class="imagePreview" id="imagePreview">
                        <img src="../uploads/profile-images/<?php echo $profileimage; ?>" alt="imagen-perfil" class="imagen-perfil" width="150px">
                    </div>
                    <label for="inpFile">Seleccionar imagen</label>
                    <input type="file" name="inpFile" size="20" id="inpFile" class="upload-file" accept="image/*" data-max-size="5000000">

                </div>
                <div class="descripcion">
                    <label for="descripcion">Presentación:</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="4" maxlength="200"><?php echo $descripcion; ?></textarea>
                </div>
                <div class="boton">
                    <input type="submit" value="Guardar cambios" name="enviar">
                </div>

            </form>

        </div>
    </div>
</div>