<div class="espacio">
    <section class="posts">
        <div class="movil-calif"><a href="Calificar/">¡<img src="images/ico-man-buena.PNG" alt="manzana" width="25px"> Califica a tus profesores!</a></div>
        <div class="publicar">
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php"));?>" method="post" class="upload-form" enctype="multipart/form-data">
                <div class="principal">
                    <img src= "uploads/profile-images/<?php echo $profileimage; ?> " alt="profile-img" width="50px">
                    <textarea name="comentario" id="comentario" class="comentario" maxlength="400" cols="30" rows="7" placeholder="Escribe lo que piensas..."></textarea>
                </div>
                <div class="separador">
                    <span class="imagen"><input type="file" name="imagen" id="imagen" accept="image/*" class="upload-file" data-max-size="5000000"></span>
                    <label for="imagen"><i class="material-icons" style="font-size: 18px; vertical-align: middle;">image</i> <span>Sube una imagen</span></label>
                    <input type="submit" name="publicar" value="Publicar">
                </div>
            </form>
        </div>

        <?php
        
            require_once("model/data/get_post.php");
            require_once("model/data/date_diff.php");
            foreach($posts_general as $post){
                echo '<div class="post">';
                echo '<div class="principal">';
                echo "<img class=\"foto-perfil\" src=\"uploads/profile-images/$post->Foto\" alt=\"profile-img-post\" width=\"50px\">";
                echo '<div class="info-area">';
                echo '<div class="info-head">';
                echo "<a href=\"Usuarios/?id=$post->Usuario\">$post->Nombre</a>";
                date_default_timezone_set("America/Mexico_City");
                $fecha = obtenerFecha($post->Fecha . $post->Hora,date('G:i:s') . date("y-n-j"));
                echo "<span class=\"info-hora\">$fecha</span>";
                echo '</div>';
                echo "<p class=\"comentario\">$post->Comentario</p>";
                if($post->Imagen_ruta!=""){
                    echo "<img class=\"img-post\" src= \"$post->Imagen_ruta\" alt=\"img-post\" width=\"200px\">";
                }
                echo '<div class="info-mancom">';
                echo "<span class=\"info-man\"><span class=\"num-man\" id=\"num-man-$post->Id_post\">$post->Manzanas</span> <img src=\"images/ico-man-buena.PNG\" alt=\"manzana\" width=\"17px\"></span>";
                echo "<span class=\"info-com\">$post->Comentarios <i class=\"large material-icons\" style=\"font-size: 17px;\">comment</i></span>";
                echo '</div>';
                echo '</div>';
                if($post->Usuario==$usuario){
                    ?>
                    <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php"));?>" method="post" onsubmit="return confirm('¿Realmente quieres borrar este post?');">
                        <input type="hidden" name="post" value="<?php echo $post->Id_post?>">
                        <button type="submit" name="borrar"><i class="material-icons" style="font-size: 20px;">delete</i></button>
                    </form>
                    <?php
                    }
                echo '</div>';
                ?>
                <div class="separador">
                    <input type="checkbox" name="manzana-<?php echo $post->Id_post;?>" id="manzana-<?php echo $post->Id_post;?>" onchange="darManzana(<?php echo $post->Id_post; ?>,<?php echo $usuario; ?>);" 
                    <?php
                        if($post->Man > 0){
                            echo " checked";
                        }
                    ?>
                    >
                    <label for="manzana-<?php echo $post->Id_post;?>" id="lbl-manzana-<?php echo $post->Id_post;?>"><img src="images/ico-man-buena.PNG" alt="manzana" width="25px"> Manzana</label>
                    <a href="post?id=<?php echo $post->Id_post; ?>">Comentar</a>
                </div>

                <?php if($post->Man > 0){?>
                <script type="text/javascript">
                    check = 'manzana-'+<?php echo $post->Id_post?>;
                    lbl = 'lbl-'+check;
                    if(document.getElementById(check).checked==true){
                        document.getElementById(lbl).style.color = '#db4545';
                    }
                </script>

                <?php
                }
                echo '</div>';
            }
        ?>
        <div class="paginacion">
            <?php
                if($pagina!=1){
                    $pag_ant = $pagina-1;
                    echo "<a href=\"index?pag=$pag_ant\">";
                    echo 'Anterior';
                    echo '</a>';
                }
                if($pagina!=$total_paginas){
                    $pag_sig = $pagina+1;
                    echo "<a href=\"index?pag=$pag_sig\">";
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