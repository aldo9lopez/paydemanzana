<div class="espacio">
    <section class="posts">
        <?php
            require_once("model/data/date_diff.php");
            require_once("model/data/ver_notificaciones.php");

            foreach($lista_notificaciones as $notificacion){
                ?>

                <a href="post?id=<?php echo $notificacion->Post;?>" style="display: block;">
                    <div <?php
                        if($notificacion->Visto==0){
                            echo 'class="notificacion-novisto"';
                        }else{
                            echo 'class="notificacion-visto"';

                        }
                    ?>
                    >
                    <?php
                        
                        date_default_timezone_set("America/Mexico_City");
                        $fecha = obtenerFecha($notificacion->Fecha . $notificacion->Hora,date('G:i:s') . date("y-n-j"));
                        if($fecha=='Hace un momento'){
                            $fecha = '1 min';
                        }
                        if($notificacion->Tipo=='Manzana'){
                            ?>
                            <img src="images/ico-man-buena.PNG" alt="manzana-b" width="30px">
                            <i>Alguien le dió una manzana a tu post</i>
                            <span class="hora"><?php echo $fecha;?></span>
                            <?php
                        }else{

                            ?>
                            <i class="material-icons">comment</i>
                            <i>Aguien hizo un comentario en tu post</i>
                            <span class="hora"><?php echo $fecha;?></span>
                            <?php
                            
                        }
                    
                    ?>
                    </div>
                </a>

                <?php
            }
            if($total_paginas==0){
                echo '<p style="text-align: center;">No tienes notificaciones aún</p>';
            }
        ?>
        <div class="paginacion">
            <?php
                if($pagina!=1){
                    $pag_ant = $pagina-1;
                    echo "<a href=\"notificaciones?pag=$pag_ant\">";
                    echo 'Anterior';
                    echo '</a>';
                }
                if(($pagina!=$total_paginas)&&($total_paginas!=0)){
                    $pag_sig = $pagina+1;
                    echo "<a href=\"notificaciones?pag=$pag_sig\">";
                    echo 'Ver más';
                    echo '</a>';
                }

            ?>
        </div>
        
    </section>
    <aside class="stats">
        <?php
        require_once("model/data/stats.php");
        require_once("view/common/aside/stats.php");
        ?>
    </aside>
</div>