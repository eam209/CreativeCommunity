<html>
<head>
	
	<meta charset="utf-8" />
	<title></title>

</head>
<body>

<h1>Registrar Usuario</h1>
<h2><?= $mensaje;?></h2>
<?php endif;?>
<form name="form_reg" action="<?= base_url().'usuarios/registro_very'?>" method="POST">
	<label for="Nombre">Nombre</label>
	<input type="text" name="nombre" value="<?= @set_value('nombre')?>" /><br />

	<label for="Correo">Correo</label>
	<input type="text" name="correo" value="<?= @set_value('correo')?>" /><br />

	<label for="usuario">Usuario</label>
	<input type="passworld" name="user" value="<?= @set_value('user')?>" /><br />

	<label for="Contraseña">Contraseña</label>
	<input type="passworld" name="pass" value="<?= @set_value('pass')?>" /><br />

	<input type="submit" value="Registrar" name="submit_reg" />
	<a href="<?= base_url().'usuarios/'?>" title="Iniciar Sesion">Iniciar Sesion</a>

</form>

<hr />
<?= validation_errors();?>

</body>
</html>