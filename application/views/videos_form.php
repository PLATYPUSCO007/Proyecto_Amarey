<main>
    <div id="about" class="section">
    <?php
    $i = 0;
    if (isset($_GET['category']) && $_GET['category'] != null) {
        ?>
        <?php
        if (!isset($videos['code'])) {
            ?>
            <h2 class="title"><?= 'Categoria: '.$_GET['category'] ?></h2>
            <div class="container-video">
                <?php
                foreach ($videos as $video) {
                    $i++;
                    ?>
                    <div class="<?= 'ind-video' . $i ?>">
                        <?= '<p>' . $video->name . '</p>'; ?>
                        <?= '<a href="http://localhost/Proyecto_Amarey/vid/' . $video->categories . '/' . get_frag_title($video->location) . '"><video class="vid" src="' . $video->location . '#t=2,10" width="300" height="300" type="video/mp4" autoplay muted></video></a>'; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <h3 class="notify">No hay videos para esta categoria</h3>
            </main>
        <?php
        die();
    }
} else {
    ?>
<h3 class="notify">Seleccione una Categoria para cargar los videos</h3>
<?php } ?>
</div>
</main>
