
<div class="sidebar" id="sidebar">
    <div class="perfil">
        <div class="nombre">
            <img src="uploads/profile-images/<?php echo $profileimage; ?>" alt="perfil" width="60px">
            <span><?php echo $profilename; ?></span>
        </div>
        <div class="carrera">
            <span><?php echo $profilecareer; ?></span>
        </div>
    </div>
    <ul>
        <hr>
        <li><a href="index" id="side-inicio"><i class="material-icons">home</i><span class="side-text">Inicio</span></a></li>
        <li><a href="#" id="side-perfil"><i class="material-icons">person</i><span class="side-text">Mi perfil</span></a></li>
        <li><a href="#" id="side-notificaciones"><i class="material-icons">notifications</i><span class="side-text">Notificaciones</span></a></li>
        <li><a href="#" id="side-manzanas"><i class="material-icons">stars</i><span class="side-text">Manzanas</span></a></li>
        <hr>
        <li><a href="#" id="side-config"><i class="material-icons">settings</i><span class="side-text">Configuracion</span></a></li>
        <li><a href="#" id="side-ayuda"><i class="material-icons">help</i><span class="side-text">Ayuda</span></a></li>
        <hr>
        <li><a href="logout" id="side-ayuda"><span class="side-text">Cerrar Sesión</span></a></li>
    </ul>
</div>