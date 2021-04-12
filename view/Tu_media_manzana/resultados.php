<div class="espacio">
    <div class="area">
        <div class="principal-info">
            <img src="../images/logo-media-m.PNG" alt="inicio-media-m" width="400px">
            <h2>Resultados</h2>

            <div class="corazon">
                <div class="titulo">
                    <img src="../images/res-corazones.png" alt="corazon" width="40px">
                    <span class="titulo-test"><b>Corazones iguales</b></span> 
                </div>
                <div class="info">
                    <span class="comp"><span class="porcentaje"><?php echo round($mm_test1_comp);?></span> % compatible</span>
                    <span class="nombre"><?php echo $mm_test1_nombre;?></span>
                    <img src="../uploads/profile-images/<?php echo $mm_test1_foto; ?>" alt="imagen-perfil" class="imagen-perfil" width="150px">
                    <span class="carrera"><?php echo $mm_test1_carrera;?></span>
                    <span class="signo"><?php echo fraseZodiaco($mm_test1_signo);?></span>
                    <span class="redes"><?php echo $mm_test1_redes;?></span>
                </div>
                <p>Esta persona tiene emociones y sentimientos que son compatibles contigo</p> 
            </div>

            <div class="mente">
                <div class="titulo">
                    <img src="../images/res-mente.png" alt="corazon" width="40px">
                    <span class="titulo-test"><b>Mentes iguales</b></span> 
                </div>
                <div class="info">
                    <span class="comp"><span class="porcentaje"><?php echo round($mm_test2_comp);?></span> % compatible</span>
                    <span class="nombre"><?php echo $mm_test2_nombre;?></span>
                    <img src="../uploads/profile-images/<?php echo $mm_test2_foto; ?>" alt="imagen-perfil" class="imagen-perfil" width="150px">
                    <span class="carrera"><?php echo $mm_test2_carrera;?></span>
                    <span class="signo"><?php echo fraseZodiaco($mm_test2_signo);?></span>
                    <span class="redes"><?php echo $mm_test2_redes;?></span>
                </div>
                <p>Esta persona tiene pensamientos y hábitos que son compatibles contigo</p> 
            </div>

            <div class="total">
                <div class="titulo">
                    <img src="../images/res-total.png" alt="corazon" width="40px">
                    <span class="titulo-test"><b>Tu media manzana</b></span> 
                </div>
                <div class="info">
                    <span class="comp"><span class="porcentaje"><?php echo round($mm_test3_comp);?></span> % compatible</span>
                    <span class="nombre"><?php echo $mm_test3_nombre;?></span>
                    <img src="../uploads/profile-images/<?php echo $mm_test3_foto; ?>" alt="imagen-perfil" class="imagen-perfil" width="150px">
                    <span class="carrera"><?php echo $mm_test3_carrera;?></span>
                    <span class="signo"><?php echo fraseZodiaco($mm_test3_signo);?></span>
                    <span class="redes"><?php echo $mm_test3_redes;?></span>
                </div>
                <p>Esta persona es extremadamente compatible contigo</p> 
            </div>

            <p class="leyenda">¿No estás conforme con los resultados?<br>
            Vuelve más tarde, quizá tu media manzana aún no contesta los test</p>
        </div>
    </div>
</div>