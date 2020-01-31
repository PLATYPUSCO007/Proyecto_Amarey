
<div class="container">
    <nav class="top-nav">
        <ul class="main">
            <?php
            foreach ($maindata['main2'] as $main2) {
                $prueba[] = $main2;
            }
            $j = 0;
            $structure_main = "";

            foreach ($maindata['main'] as $main) {
                $structure_main .= '<li class="pi-has-dropdown"> <a href="">' .$main->titulo .'</a>';
                $structure_main .= '<ul class="dropdown">';
                if ($main->id == $prueba[$j]->enlacef) {
                    $structure_main .= '<li> <a href="">' . $prueba[$j]->titulo . '</li></a>';
                }
                $structure_main .= '</ul>';
                $structure_main .= '</li>';

                $j++;
            }
            ?>

            <?= $structure_main ?>

        </ul>
    </nav>
</div>
</body>
</html>