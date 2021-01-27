<div class="mejores-profes">
            <table class="lista-mejores">
                <tr><td colspan="4"><span class="titulo">Top 10 mejores profesores</span></td></tr>
                <?php
                    $i = 1;
                    foreach ($mejores_profesores as $profesores) {
                        echo '<tr>';
                        echo "<td>$i</td>";
                        echo "<td class=\"nombre\"><a href=\"Buscar/profesor?id=$profesores->Profesor\">";
                        echo "$profesores->Nombre</a></td>";
                        echo '<td class="promedio">';
                        $promedio = round($profesores->Promedio, 1);
                        echo "$promedio <span class=\"estrella\">★</span></td>";
                        echo '<td class="manzanas">';
                        echo "$profesores->Manzanas <img src=\"images/manzana-$profesores->Tipo.png\" alt=\"manzana\" width=\"17px\"></td>";
                        echo '</tr>';
                        $i++;
                    }
                ?>
            </table>
        </div>

        <div class="peores-profes">
            <table class="lista-peores">
                <tr><td colspan="4"><span class="titulo">Top 5 peores profesores</span></td></tr>
                <?php
                    $i = 1;
                    foreach ($peores_profesores as $profesores) {
                        echo '<tr>';
                        echo "<td>$i</td>";
                        echo "<td class=\"nombre\"><a href=\"Buscar/profesor?id=$profesores->Profesor\">";
                        echo "$profesores->Nombre</a></td>";
                        echo '<td class="promedio">';
                        $promedio = round($profesores->Promedio, 1);
                        echo "$promedio <span class=\"estrella\">★</span></td>";
                        echo '<td class="manzanas">';
                        echo "$profesores->Manzanas <img src=\"images/manzana-$profesores->Tipo.png\" alt=\"manzana\" width=\"17px\"></td>";
                        echo '</tr>';
                        $i++;
                    }
                ?>
            </table>
        </div>

        <div class="peores-materias">
            <table class="lista-materias">
                <tr><td colspan="3"><span class="titulo">Top 5 peores materias</span></td></tr>
                <?php
                    $i = 1;
                    foreach ($peores_materias as $materia) {
                        echo '<tr>';
                        echo "<td>$i</td>";
                        echo "<td class=\"nombre\"><a href=\"Buscar/materia?id=$materia->Materia\">";
                        echo "$materia->Nombre</a></td>";
                        echo '<td class="porcentaje">';
                        $porcentaje = round($materia->Porcentaje);
                        echo "$porcentaje% reprob.</td>";
                        echo '</tr>';
                        $i++;
                    }
                ?>
            </table>
        </div>