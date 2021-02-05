<div class="espacio">
    <div class="area">
        <?php
        require_once("../model/data/popularidad.php");
        require_once("../model/Usuarios/info_miperfil.php");
        ?>
        <div class="principal-perfil">
            <div class="boton">
                <a href="editarperfil">Editar perfil</a>
            </div>
            <div class="head-info">
                <div class="imagen">
                    <img src="../uploads/profile-images/<?php echo $profileimage; ?>" alt="img-perfil" class="foto-perfil" width="150px">
                </div>
                <div class="nombre">
                    <h2><?php echo $profilename; ?></h2>
                    <hr>
                    <span class="carrera"><?php echo $careername; ?></span>
                </div>
            </div>
            <span class="anio">Ingreso: <i><?php echo $anio_ingreso; ?></i></span>
            <p class="descripcion">
                <?php
                if ($descripcion != "") {
                    echo $descripcion;
                } else {
                    echo '<i>Añade tu presentación</i>';
                }
                ?>
            </p>

            <div class="popu">
                <?php
                if (($pop_car_num <= 10 || $pop_gen_num <= 10)&&($pop_gen_num != null)) {
                    echo '<hr>';
                    echo '<span class="tit-popu">Popular</span>';
                }

                ?>

                <table class="popularidad">
                    <tr>
                        <?php
                        if ($pop_car_num != null) {
                            switch ($pop_car_num) {
                                case 1:
                                    echo '<td><img src="../images/top-1.png" alt="img-perfil" width="40px"></td>';
                                    break;
                                case ($pop_car_num <= 5):
                                    echo '<td><img src="../images/top-5.png" alt="img-perfil" width="40px"></td>';
                                    break;
                                case ($pop_car_num <= 10):
                                    echo '<td><img src="../images/top-10.png" alt="img-perfil" width="40px"></td>';
                                    break;
                            }
                        }
                        if ($pop_gen_num != null) {
                            switch ($pop_gen_num) {
                                case 1:
                                    echo '<td><img src="../images/top-1.png" alt="img-perfil" width="40px"></td>';
                                    break;
                                case ($pop_gen_num <= 5):
                                    echo '<td><img src="../images/top-5.png" alt="img-perfil" width="40px"></td>';
                                    break;
                                case ($pop_gen_num <= 10):
                                    echo '<td><img src="../images/top-10.png" alt="img-perfil" width="40px"></td>';
                                    break;
                            }
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        if ($pop_car_num <= 10&& $pop_car_num != null) {
                            echo "<td>$profilecareer</td>";
                        }
                        if ($pop_gen_num <= 10&& $pop_gen_num != null) {
                            echo "<td>Escuela</td>";
                        }

                        ?>

                    </tr>
                </table>
            </div>

        </div>

        <div class="publicar">
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php"));?>" method="post" class="upload-form" enctype="multipart/form-data">
                <div class="principal">
                    <img src= "../uploads/profile-images/<?php echo $profileimage; ?> " alt="profile-img" width="50px">
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
            $perfil_usuario = $usuario;
            require_once("../model/Usuarios/get_post.php");
            require_once("../model/data/date_diff.php");
            foreach($posts_general as $post){
                echo '<div class="post">';
                echo '<div class="principal">';
                echo "<img class=\"foto-perfil\" src=\"../uploads/profile-images/$post->Foto\" alt=\"profile-img-post\" width=\"50px\">";
                echo '<div class="info-area">';
                echo '<div class="info-head">';
                echo "<a href=\"../Usuarios/?id=$post->Usuario\">$post->Nombre</a>";
                date_default_timezone_set("America/Mexico_City");
                $fecha = obtenerFecha($post->Fecha . $post->Hora,date('G:i:s') . date("y-n-j"));
                echo "<span class=\"info-hora\">$fecha</span>";
                echo '</div>';
                echo "<p class=\"comentario\">$post->Comentario</p>";
                if($post->Imagen_ruta!=""){
                    echo "<img class=\"img-post\" src= \"../$post->Imagen_ruta\" alt=\"img-post\" width=\"200px\">";
                }
                echo '<div class="info-mancom">';
                echo "<span class=\"info-man\"><span class=\"num-man\" id=\"num-man-$post->Id_post\">$post->Manzanas</span> <img src=\"../images/ico-man-buena.PNG\" alt=\"manzana\" width=\"17px\"></span>";
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
                    <label for="manzana-<?php echo $post->Id_post;?>" id="lbl-manzana-<?php echo $post->Id_post;?>"><img src="../images/ico-man-buena.PNG" alt="manzana" width="25px"> Manzana</label>
                    <a href="../post?id=<?php echo $post->Id_post; ?>">Comentar</a>
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
                    echo "<a href=\"miperfil?pag=$pag_ant\">";
                    echo 'Anterior';
                    echo '</a>';
                }
                if(($pagina!=$total_paginas)&&($total_paginas!=0)){
                    $pag_sig = $pagina+1;
                    echo "<a href=\"miperfil?pag=$pag_sig\">";
                    echo 'Ver más';
                    echo '</a>';
                }

            ?>
        </div>
    </div>
</div>