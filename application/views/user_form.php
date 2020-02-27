<?= $header; ?>
<?= $body; ?>
<?php
include base_url() . 'main';
?>
<div id="registry">
    <?php  ?>
    <?php if (!isset($_SESSION['login']) || !$_SESSION['login']) { ?>
        <script> window.alert("Acceso no permitido");</script>
        <?php
        redirect(base_url());
        die();
        ?>
    <?php } else { ?>
        <a href="<?= base_url().'logout' ?>"><h4>Cerrar Sesion</h4></a>
        <h4><?= $_SESSION['user']; ?></h4>
</div>
        <?php
        if (isset($_GET['category']) && $_GET['category'] != null) {
            include base_url() . 'videos?category=' . $_GET['category'];
        } else {
            include base_url() . 'videos?category=' . null;
        }
        ?>
    <?php } ?>


</body>
</html>
