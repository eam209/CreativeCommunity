<html>
<head>
	
	<meta charset="utf-8" />
	<title></title>

</head>
<body>

<h1>Iniciar Sesion</h1>
<form>
	<label for="Usuario">Usuario</label>
	<input type="text" name="user" /><br />

	<label for="contraseña">Contraseña</label>
	<input type="passworld" name="pass" /><br />

	<input type="submit" value="Entrar" name="submit" />
	<a href="<?= base_url().'usuarios/registro'?>" title="Deseo Registrarme">Registrarme</a>
</form>



</body>
</html>