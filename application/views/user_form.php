<?= $skeletones['header'];?>
<?= $skeletones['body']; ?>
<?php  
$CI =& get_instance();
$file = "application\controllers\main_controller.php";
if(file_exists($file)){ 
    require_once $file;
    main_controller::print_main($CI);
} else {
    echo 'no existe';
}
?>

<div id="registry">
    <?php if ($this->session->userdata('login')) { ?>
        <a href="<?= base_url() ?>">Cerrar Sesion</a>
        <?php foreach ($usuario->result() as $user) { ?>
            <h1><?= $user->nombre; ?></h1>
        <?php } ?>
        
    <?php } ?>

</div>

</body>
</html>
