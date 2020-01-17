
<div id="form">
<?= form_open('/Welcome/recibir_datos');?>
<?php
    $name = array('name' => 'name', 'placeholder' => 'Usuario');
    $password = array('name' => 'password', 'placeholder' => 'pass');
?>
        <?= form_label('Usuario :', 'name')?>
        <?= form_input($name)?>
        <?= form_label('Contraseña :', 'password')?>
        <?= form_password($password)?>    
    <br>
    <br>
        <?= form_submit('', 'Ingresar')?>
    </form>
    <br>
    <a href="<?=  get_registry() ?>" target="_blank">Crear una cuenta ahora!</a> 
</div>

