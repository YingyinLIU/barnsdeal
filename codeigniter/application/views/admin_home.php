<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barnsdeal</title>
    <link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<style> body { padding-top: 70px; } </style>
</head>

<body>

<?php $nav_bar ?>

	<h3>Ajout d'un questionnaire</h3>

<?php
	echo form_open('form/ajouter');
	
	$data = array(
	'name' => 'new_form',
	'placeholder' => 'Nom du questionnaire'
	);
	echo form_input($data);
	
	echo form_submit('submit', 'Confirmer');
	echo form_close();
?>
<hr>
<h3>Liste des questionnaires</h3>

<?php 

foreach ($forms as $form)
{
	echo $form['table_name'] = str_replace("q_", "", $form['table_name']); 
	
	// Bouton pour afficher les réponses
	echo form_open('form/reponses');
	$data = array(
		'form' => $form['table_name']
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Réponses');
	echo form_close();
	
	// Bouton pour modifier le questionnaire
	echo form_open('form/modifier');
	$data = array(
		'modify_form' => $form['table_name']
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Modifier');
	echo form_close();
	
	// Bouton pour supprimer le questionnaire
	echo form_open('form/supprimer');
	$data = array(
		'delete_form' => $form['table_name']
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Supprimer');
	echo form_close();
	
	
}
	?>
	
</body>
</html>


