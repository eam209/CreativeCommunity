<main>
<h1>Actualizar Post</h1>

<?= form_open("/posts/actualizar/".$id) ?>

<?php

	$titulo = array(
		'name' => 'titulo',
		'placeholder' => 'Escriba aquí el titulo',
		'value' => $post->result()[0]->titulo,
		'style' => 'width:100%',
	 );
	$contenido = array(
		'name' => 'contenido',
		'placeholder' => 'escriba aqui un contenido',
		'value' => $post->result()[0]->contenido,

	);

	$autor = array(
		'name' => 'autor',
		'placeholder' => 'Escriba el nombre del Autor aquí',
		'value' => $post->result()[0]->autor,
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
			<?= form_submit('', 'Actualizar') ?>
		</td>
	</tr>
</table>
<? form_close() ?>


<style type="text/css">
	.text-left{
		text-align: left;
	}
	.text-right{
		text-align: right;
	}
	.formulario_agregar{
		margin: 0 auto;
	}
</style>
</main>