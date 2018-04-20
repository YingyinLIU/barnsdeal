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

	<?php $this->load->view('nav_bar'); ?>
	
	<h2>LISTE DES QUESTIONS</h2>

	<?php 

	foreach ($form as $question)
	{
		
		echo $question['position'];
		echo '<div id='.$question['position'].'>';
		
		// BALISE D'OUVERTURE DU QUESTIONNAIRE	
		echo '<form action="'.base_url().'Form/repondre_question" method="post">';
			
		// AFFICHAGE DES CHAMPS TEXTES
		if($question['type'] == "champ_texte")
		{				
			echo '<div><label>'.$question['intitule'].'</label></br>
			<input type="text" name='.$question['id'].'_>
			<input type="hidden" name="type_question" value="champ_texte"></div>';
		}
							
		// AFFICHAGE DES CHAMPS NUMERIQUES			
		else if($question['type'] == "champ_numerique")
		{				
			echo '<div><label>'.$question['intitule'].'</label></br>
			<input type="text" name='.$question['id'].'_>
			<input type="hidden" name="type_question" value="champ_numerique"></div>';
		}
							
		// AFFICHAGE DES CHOIX MULTIPLES			
		else if($question['type'] == "choix_multiple")
		{				
			$array_choix = ['choix1','choix2','choix3','choix4','choix5','choix6','choix7','choix8','choix9','choix10'];				
			echo '<div><label>'.$question['intitule'].'</label></br>';				  
			foreach($array_choix as $element)
			{	
				if (!($question[$element] == ""))
				{						
					echo '<input type="checkbox" name="'.$question['id'].'_'.$question[$element].'" value=1>
					 <label>'.$question[$element].'</label>';						  
				}
			}
			echo '<input type="hidden" name="type_question" value="choix_multiple">';		
			echo '</div>';
		}
							
		// AFFICHAGE DES CHOIX SIMPLES		
		else if($question['type'] == "choix_simple")
		{				
			$array_choix = ['choix1','choix2','choix3','choix4','choix5','choix6','choix7','choix8','choix9','choix10'];				
			echo '<div><label class="label">'.$question['intitule'].'</label></br>';					  
			foreach($array_choix as $element)
			{				
				if (!($question[$element] == ""))
				{					
					echo '<input type="radio" name="'.$question['id'].'_'.$question[$element].'" value=1>
					<label>'.$question[$element].'</label>';							  
				}
			}
			echo '<input type="hidden" name="type_question" value="choix_simple">';		
			echo '</div>';
		}
						
		// AFFICHAGE DES ECHELLES		
		else if($question['type'] == "echelle")
		{				
			echo '<div><label>'.$question['intitule'].'</label></br>';					  
			echo '<input type="radio" name="'.$question['id'].'_" value=1>
			<label>'.$question['sens_min'].'</label>					  
			<input type="radio" name="'.$question['id'].'_" value=2>
			<label>2</label>				  
			<input type="radio" name="'.$question['id'].'_" value=3>
			<label>3</label>					  
			<input type="radio" name="'.$question['id'].'_" value=4>
			<label>4</label>
			<input type="radio" name="'.$question['id'].'_" value=5>
			<label>'.$question['sens_max'].'</label>';	
			echo '<input type="hidden" name="type_question" value="echelle">';		
			echo '</div>';
		}
			
		// A VOIR POUR PASSER PAR UNE VARIABLE DE SESSION
		echo '<input type="hidden" name="form_name" value="'.$form_name.'">';
		echo '<input type="hidden" name="id_question" value="'.$question['id'].'">';
		
		// BOUTON DE CONFIRMATION
		echo '<input type="submit" value="Confirmer" />';
				
		// BALISE DE FERMETURE DU QUESTIONNAIRE
		echo '</form>';

		echo '</div>';
	}


	?>
		
</body>
</html>

