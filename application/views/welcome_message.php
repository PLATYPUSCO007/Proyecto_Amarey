<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AMAREY PROYECTO</title>

</head>
<body>

<div id="container">
    <h1>HOLA AMAREY</h1>
    <?php if($this->session->userdata('login')){?>
    <a href="<?= base_url() ?>">Cerrar Sesion</a>
    <?php foreach ($usuario->result() as $user){?>
    <?= $user->nombre; ?>
    <?php } ?>
    <?php logout() ?>
    <?php } ?>
    
</div>

</body>
</html>