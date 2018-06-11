<h3>Ajout d'un utilisateur</h3>

<?php
	echo '<div class="container" style="padding-top: 15px">';

	echo form_open('Form/ajouter_utilisateur');
	
	$options = array();
	
	array_push($options, 'Sélectionner');
	
	foreach($startups as $startup)
	{	
		$tmp = $startup['id'];
		$options[$tmp] = $startup['nom'];
	}
	
	echo form_dropdown('start_up', $options);

	$column = $this->db->query('SELECT column_name FROM information_schema.columns WHERE table_name = "users" AND table_schema="codeigniter"');

	$column = $column->result_array();

	$name_quest = $this->db->query('SELECT intitule FROM forms ORDER BY id');

	$name_quest = $name_quest->result_array();

	//Position du premier questionnaire
	$pos_questionnaire = 4;

    echo '<h5 id="11">A quels questionnaires a t-il accès? </h4>';

	for ($i = $pos_questionnaire; $i < count($column); $i++){
		$data = array(
			'name' => 'checkbox[]',
			'id' => 'checkbox' . ($i - $pos_questionnaire),
			'value' => $column[$i]["column_name"],
			'checked' =>	 FALSE
		);
		echo form_label(form_checkbox($data) . $name_quest[$i - $pos_questionnaire]["intitule"]);
	}
	
	echo '<div id="form_sub">'.form_submit('submit', 'Confirmer').'</div>';
	echo form_close();
	echo '</div>';
?>