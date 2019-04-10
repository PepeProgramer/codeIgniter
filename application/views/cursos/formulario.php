<?= form_open("/cursos/recibirdatos") ?>

<?php
 $nombre = array(
 	'name' => 'nombre',
	 'placeholder' => 'Escribe tu nombre',
 );

$videos = array(
	'name' => 'videos',
	'placeholder' => 'Cantidad videos curso',
);

 ?>

	<?= form_label('Nombre: ', 'nombre') ?>
		<?= form_input($nombre)?>

<br>
<br>
<br>

	<?= form_label('Numero de videos: ', 'videos') ?>
	<?= form_input($videos)?>
<?= form_submit('', 'subir curso'); ?>

<?= form_close() ?>
</body>
</html>
