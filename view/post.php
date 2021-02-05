<div class="espacio">
    <section class="posts">
        <?php
            require_once("model/data/date_diff.php");
        ?>
        <div class="post">
            <div class="principal">
                <img src="uploads/profile-images/<?php echo $post_foto_perfil;?>" alt="img-post-profile" class="foto-perfil">
                <div class="info-area">
                    <div class="info-head">
                            <a href="Usuarios/?id=<?php echo $post_usuario?>"><?php echo $post_nombre?></a>
                            <?php
                                date_default_timezone_set("America/Mexico_City");
                                $fecha = obtenerFecha($post_fecha . $post_hora,date('G:i:s') . date("y-n-j"));
                            ?>
                            <span class="info-hora"><?php echo $fecha;?></span>
                    </div>
                    <p class="comentario"><?php echo $post_texto;?></p>
                    <?php
                        if($post_imagen!=""){
                            echo "<img class=\"img-post\" src= \"$post_imagen\" alt=\"img-post\" width=\"200px\">";
                        }
                    ?>
                    <div class="info-mancom">
                        <span class="info-man">
                            <span class="num-man" id="num-man-<?php echo $post;?>"><?php echo $post_nmanzanas;?></span> <img src="images/ico-man-buena.PNG" alt="manzana" width="17px">
                        </span>
                        <span class="info-com"><?php echo $post_ncomentarios?> <i class="material-icons" style="font-size: 17px;">comment</i></span></span>
                    </div>
                </div>
            </div>
            <div class="separador">
                <input type="checkbox" name="manzana-<?php echo $post;?>" id="manzana-<?php echo $post;?>" onchange="darManzana(<?php echo $post; ?>,<?php echo $usuario; ?>);" 
                <?php
                    if($post_man > 0){
                        echo " checked";
                    }
                ?>
                ><label for="manzana-<?php echo $post;?>" id="lbl-manzana-<?php echo $post;?>"><img src="images/ico-man-buena.PNG" alt="manzana" width="25px"> Manzana</label>
            </div>
                <?php if($post_man > 0){?>
                <script type="text/javascript">
                    check = 'manzana-'+<?php echo $post?>;
                    lbl = 'lbl-'+check;
                    if(document.getElementById(check).checked==true){
                        document.getElementById(lbl).style.color = '#db4545';
                }
                </script>
                <?php
                }
                    
                ?>
        </div>
        
        <div class="publicar">
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")."?id=$post");?>" method="post" class="upload-form">
                <div class="principal">
                    <img src= "uploads/profile-images/<?php echo $profileimage; ?> " alt="profile-img" width="50px">
                    <textarea name="comentario" id="comentario" class="comentario" maxlength="400" cols="30" rows="3" placeholder="Escribe un comentario..."></textarea>
                </div>
                <div class="separador">
                    <input type="submit" name="comentar" value="Comentar">
                 </div>
            </form>
        </div>

        <?php
            require_once("model/data/post_comentarios.php");
            foreach($comentarios_post as $comentario){
                echo '<div class="comentario">';
                echo '<div class="principal">';
                echo "<img class=\"foto-perfil\" src=\"uploads/profile-images/$comentario->Foto\" alt=\"profile-img-post\" width=\"50px\">";
                echo '<div class="info-area">';
                echo '<div class="info-head">';
                echo "<a href=\"Usuarios/?id=$comentario->Usuario\">$comentario->Nombre</a>";
                date_default_timezone_set("America/Mexico_City");
                $fecha = obtenerFecha($comentario->Fecha . $comentario->Hora,date('G:i:s') . date("y-n-j"));
                echo "<span class=\"info-hora\">$fecha</span>";
                echo '</div>';
                echo "<p class=\"comentario\">$comentario->Comentario</p>";
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
        
        <div class="paginacion">
            <?php
                if($pagina!=1){
                    $pag_ant = $pagina-1;
                    echo "<a href=\"post?id=$post&pag=$pag_ant\">";
                    echo 'Anterior';
                    echo '</a>';
                }
                if(($pagina!=$total_paginas)&&($total_paginas!=0)){
                    $pag_sig = $pagina+1;
                    echo "<a href=\"post?id=$post&pag=$pag_sig\">";
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