
<div class="sidebar" id="sidebar">
    <div class="perfil">
        <div class="nombre">
            <div class="img-container">
                <img src="uploads/profile-images/<?php echo $profileimage; ?>" alt="perfil" width="60px">
            </div>
            <span><?php echo $profilename; ?></span>
        </div>
        <div class="carrera">
            <span><?php echo $profilecareer; ?></span>
        </div>
    </div>
    <ul>
        <hr>
        <li><a href="index" id="side-inicio"><i class="material-icons">home</i><span class="side-text">Inicio</span></a></li>
        <li><a href="Tu_media_manzana/" id="side-manzanas"><i class="material-icons">favorite</i><span class="side-text">Tu media manzana</span></a></li>
        <li><a href="Usuarios/miperfil" id="side-perfil"><i class="material-icons">person</i><span class="side-text">Mi perfil</span></a></li>
        <li><a href="notificaciones" id="side-notificaciones"><i class="material-icons">notifications</i><span class="side-text">Notificaciones</span>
        <?php
            if($notifications>0){
                echo " <span class=\"notificaciones\">$notifications</span>";
            }
        ?>
        </a></li>
        <hr>
        <li><a href="Usuarios/configuracion" id="side-config"><i class="material-icons">settings</i><span class="side-text">Configuración</span></a></li>
        <li><a href="ayuda" id="side-ayuda"><i class="material-icons">help</i><span class="side-text">Ayuda</span></a></li>
        <hr>
        <li><a href="logout" id="side-ayuda"><span class="side-text">Cerrar Sesión</span></a></li>
    </ul>
</div>