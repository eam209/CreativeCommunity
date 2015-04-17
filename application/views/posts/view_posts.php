<h1>Ver Posts</h1><br>

<?php
	if($posts_tbl){
	foreach ($posts_tbl->result() as $post) { ?>

		<h2><a href="<?= $post->id_post; ?>"><?= $post->titulo ?></a></h2>
		<p><?= $post->contenido ?></p>
		<h3><?= $post->autor ?></h3>
		<span><?= $post->fecha ?></span>
<?php 

	}
	}
	else{
		echo "<h1>Error en la aplicaion</h1>";
	}

?>

