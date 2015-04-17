<h1>Agregar Nuevo Post</h1>

<?= form_open('/posts/recibirdatos') ?>

<?php

	$titulo = array(
		'name' => 'titulo',
		'placeholder' => 'Escriba aquí el titulo',
		'style' => 'width:100%',
	 );
	$contenido = array(
		'name' => 'contenido',
		'placeholder' => 'escriba aqui un contenido',
	);

	$autor = array(
		'name' => 'autor',
		'placeholder' => 'Escriba el nombre del Autor aquí',
		'style' => 'width:100%',
	);


?>

<table class="formulario_agregar">
	<tr>
		<td>
			<?= form_label('Titulo:', 'titulo') ?>
		</td>
		<td>
			<?= form_input($titulo) ?>
		</td>
	</tr>

	<tr>
		<td>
			<?= form_label('Contenido:', 'contenido') ?>
		</td>
		<td>
			<?= form_textarea($contenido) ?>
		</td>
	</tr>

	<tr>
		<td>
			<?= form_label('Autor:', 'autor') ?>
		</td>
		<td>
			<?= form_input($autor) ?>
		</td>
	</tr>

	<tr>
		<td class="text-left">
			<?= form_reset('', 'Borrar') ?>
		</td>
		<td class="text-right">
			<?= form_submit('', 'Enviar') ?>
		</td>
	</tr>
</table>
<? form_close() ?>