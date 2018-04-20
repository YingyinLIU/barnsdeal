<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barnsdeal</title>
    <link href="<?php echo site_url('assets/css/bootstrap.css')?>" rel="stylesheet">
	<style> body { padding-top: 70px; } </style>
</head>

<body>

<h3>Liste de vos questionnaires</h3>

<?php $this->load->view('nav_bar'); ?>

<?php 

foreach ($forms as $form)
{
	echo $form_name = str_replace("q_", "", $form['table_name']);  
	
	// Bouton pour répondre au questionnaire
	echo form_open('Form/repondre/'.$form_name);	
	$data = array(
		'form' => $form_name
	);
	echo form_hidden($data);
	echo form_submit('submit', 'Répondre');
	echo form_close();
	
}
	?>
	



