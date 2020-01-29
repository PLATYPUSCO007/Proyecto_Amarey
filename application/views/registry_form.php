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
                <p class="lead white-text">Registro</p>
            </div>
        </div>
        <!--?php require 'session_form.php'; ?-->
    </div>
</div>
<!--/div-->
<!-- /Home -->
<div id="form">
    <?= form_open('/Welcome/recibir_datos'); ?>
    <?php
    $name = array('name' => 'name', 'placeholder' => 'Usuario');
    $password = array('name' => 'password', 'placeholder' => 'pass');
    ?>
    <?= form_label('Usuario :', 'name') ?>
    <?= form_input($name) ?>
    <?= form_label('Contraseña :', 'password') ?>
    <?= form_password($password) ?>    
    <br>
    <br>
    <?= form_submit('', 'Registrarme') ?>
    </form>
</div>

</body>
</html>