<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barnsdeal</title>
    <link href="<?php echo site_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/admin_home.css'); ?>" rel="stylesheet">
	<style> body { padding-top: 62px; background-color: rgb(246, 246, 246); } </style>
</head>

<body>
	
<?php $this->load->view('nav_bar'); ?>

<div class="main_container">

	<h3>Ajout d'un questionnaire</h3>

<?php

	echo '<div class="container" style="padding-top: 15px">';

	echo form_open('Form/ajouter');
	
	$data = array('name' => 'new_form', 'placeholder' => 'Nom du questionnaire');
	echo '<div id="form_name">'.form_input($data).'</div>';
	
	$data = array('name' => 'details', 'rows' => 10, 'cols' => 50, 'placeholder' => 'Expliquez l\'intérêt de ce questionnaire pour le répondant');
	echo '<div id="form_desc">'.form_textarea($data).'</div>';
	
	echo '<div id="form_sub">'.form_submit('submit', 'Confirmer').'</div>';
	echo form_close();
	echo '</div>';
?>

<hr>
<h3>Liste des questionnaires</h3>
<div class="container" style="padding-top: 10px">
<?php 


echo '<div class="row">';

$position = 0;

$forms_id = array_keys($forms);

for ($i = 0; $i < count($forms_id); $i++)
{
	$form_id = $forms_id[$i];
	$form_name = $forms[$form_id];
	$position = $position + 1;
	if($position == 7){ $position = 0; }
	
	echo '<div class="col-md-2" style="padding-bottom: 15px; padding-top: 15px; min-width:200px;">';
	echo '<div class="card my_form" style="background-color: #6c6f66;">';
	
	echo '<div class="form_name">';
	echo $form_name;
	echo '</div>';
	
	// Bouton pour afficher les réponses
	echo form_open('Form/reponses/'.$form_id);
	echo form_submit('reponses', 'Réponses', $data);
	echo form_close();
	
	// Bouton pour modifier le questionnaire
	echo form_open('Form/modifier');
	$data = array('modify_form' => $form_id);
	echo form_hidden($data);
	echo form_submit('modifier', 'Modifier');
	echo form_close();
	
	// Bouton pour supprimer le questionnaire
	echo form_open('Form/supprimer');
	$data = array('delete_form' => $form_id);
	echo form_hidden($data);
	echo form_submit('supprimer', 'Supprimer');
	echo form_close();
	
	echo '</div>';
	echo '</div>';
}
if($position==0){ echo '</div><div class="row">'; }

echo '</div>';
echo '</div>';
echo '</div>';
?>
</div>
<script src="<?php echo site_url('assets/javascript/jquery.min.js')?>"></script>
<script src="<?php echo site_url('assets/javascript/bootstrap.bundle.js')?>"></script>
</body>
</html>


