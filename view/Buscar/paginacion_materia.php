
<div class="paginacion">
    <?php
        if($pagina!=1){
            $pag_ant = $pagina-1;
            echo "<a href=\"materia?id=$subject&pag=$pag_ant\">";
            echo 'Anterior';
            echo '</a>';
        }
        if($pagina!=$total_paginas){
            $pag_sig = $pagina+1;
            echo "<a href=\"materia?id=$subject&pag=$pag_sig\">";
            echo 'Ver más';
            echo '</a>';
        }

    ?>
</div>