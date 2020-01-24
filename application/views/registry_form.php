<?= $header ?>
<?= $body ?>
<div id="registry">
    <?= form_open('/Welcome/recibirdatos'); ?>
    <?php
    $nameRegistry = array('name' => 'name', 'placeholder' => 'Usuario');
    $passwordRegistry = array('name' => 'password', 'placeholder' => 'pass');
    ?>
    <?= form_label('Usuario :', 'nameRegistry') ?>
    <?= form_input($nameRegistry) ?>
    <?= form_label('Contraseña :', 'passwordRegistry') ?>
    <?= form_password($passwordRegistry) ?>           
    <?= form_submit('', 'Registrarme') ?>
</form>
</div>
</body>
</html>