
<h2>AJOUT D'UN QUESTIONNAIRE</h2>

<?php
	echo form_open('Form/ajouter');
	
	$data = array(
	'name' => 'new_form',
	'placeholder' => 'Nom du questionnaire'
	);
	echo form_input($data);
	
	echo form_submit('submit', 'Confirmer');
	echo form_close();
?>

<h2>LISTE DES QUESTIONNAIRES</h2>

<?php 

foreach ($forms as $form)
{
	echo $form['table_name'] = str_replace("q_", "", $form['table_name']); 
	
	// Bouton pour afficher les réponses
	echo form_open('Form/reponses');
	$data = array(
		'form' => $form['table_name']
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Réponses');
	echo form_close();
	
	// Bouton pour modifier le questionnaire
	echo form_open('Form/modifier');
	$data = array(
		'modify_form' => $form['table_name']
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Modifier');
	echo form_close();
	
	// Bouton pour supprimer le questionnaire
	echo form_open('Form/supprimer');
	$data = array(
		'delete_form' => $form['table_name']
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Supprimer');
	echo form_close();
	
	
}
	?>
	



