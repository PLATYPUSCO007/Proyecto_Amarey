
<div class="container">
    <nav class="top-nav">
        <ul class="main">
            <?php
            $structure_main = "";

            foreach ($maindata['main'] as $main) {
                $structure_main .= '<li class="pi-has-dropdown">' . '<a href="'. $main->url .'">' . $main->titulo . '</a>';
                $structure_main .= '<ul class="dropdown">';
                foreach ($maindata['main2'] as $main2) {
                    if ($main->id == $main2->enlacef) {
                        $structure_main .= '<li> <a href="' . $main2->url .'?category='. $main2->titulo . '">' . $main2->titulo . '</li></a>';
                    }
                }
                $structure_main .= '</ul>';
                $structure_main .= '</li>';
            }
            ?>

            <?= $structure_main ?>

        </ul>
    </nav>
</div>
