<?= $header ?>
<?= $body ?>
<!-- Home -->
<!--div id="home" class="hero-area"-->
<div class="home-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="white-text">Inducción en SAP</h1>
                <p class="lead white-text">Grupo Amarey Nova Medical</p>
            </div>
        </div>
    </div>
</div>
<!--/div-->
<!-- /Home -->
<div id="registry">
    <?php session_destroy(); ?>
    <!--?php $this->session->sess_destroy();?-->
    <?php if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') { ?>
        <script> window.alert("Usuario no encontrado");</script>
    <?php } ?>
    <?= form_open('/Welcome/validate_user'); ?>
    <?php
    $name_validated = array('name' => 'name_validated', 'placeholder' => 'Usuario', 'id' => 'name');
    $password_validated = array('name' => 'password_validated', 'placeholder' => 'pass', 'id' => 'pass');
    ?>
    <?= form_label('Usuario :', 'name_validated') ?>
    <?= form_input($name_validated) ?>
    <?= form_label('Contraseña :', 'password_validated') ?>
    <?= form_password($password_validated) ?>     
    <br>
    <br>
    <?= form_submit('', 'Entrar', "onclick='notify();'") ?>
    </form>
    <br>
    <div id="enter">
        <a href="<?= get_registry() ?>" target="_blank">Crear una cuenta ahora!</a> 
    </div>
</div>
</body>
</html>