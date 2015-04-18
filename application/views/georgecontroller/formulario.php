<?= form_open("/georgecontroller/recibirdatos") ?>
<? 

   $nombre = array(
      'name' => 'nombre',
      'placeholder' => 'Escribe tu nombre'
   	);
   	$videos = array(
   		'name' => 'videos',
   		'placeholder' => 'Cantidad videos del curso' 
   	);
?>

<?= form_label('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Numero videos: ', 'videos') ?>
<?= form_input($videos) ?>
<?= form_submit('', 'Subir curso') ?>
<?= form_close() ?>


</body>
</html>      	 