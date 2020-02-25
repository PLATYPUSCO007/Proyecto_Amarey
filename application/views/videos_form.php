
<ul>
    <?php
    if (isset($_GET['category']) && $_GET['category'] != null) {
        foreach ($videos as $video) {
            ?>
            <?= '<li><p>' . $video->name . '</p>'; ?>
            <?= '<video src="' . $video->location . '#t=2,10" width="300" height="300" type="video/mp4" autoplay muted></video></li>'; ?>
        <?php }
    } else { ?>
        <h4>Seleccione una Categoria para cargar los videos</h4>
<?php } ?>

</ul>
