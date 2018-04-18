<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/test.css">
		<link rel="stylesheet" href="css/form.css">
		
		<title>BARNSDEAL</title>
		
    </head>
	
    <body>
	
	<section class="mainpage">
        
		<h1>BARNSDEAL</h1>
		
		<p>Nous vous remercions d'avoir participé à ce questionnaire</p>
		
		<?php
		
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		}

		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		
		$reponse = $bdd->query('SELECT * FROM repondant WHERE ID=1');

		while ($donnees = $reponse->fetch()){
			echo 'ID : ' . $donnees['ID'] . '<br />' .
			'Nom : ' . $donnees['nom'] . '<br />' .
			'Prénom : ' . $donnees['prenom'] . '<br />' .
			'Profession : ' . $donnees['profession'] . '<br />' .
			'Ancienneté : ' . $donnees['anciennete'] . '<br />' .
			'Genre : ' . $donnees['genre'] . '<br />' .
			'CEO : ' . $donnees['CEO'] . '<br />' .
			'Membre du comité de direction : ' . $donnees['comite_dir'] . '<br />' .
			'Salarié avec parts : ' . $donnees['salarie_parts'] . '<br />' .
			'Salarié sans part : ' . $donnees['salarie_sans_part'] . '<br />' .
			'Consultant ext : ' . $donnees['consult_ext'] . '<br />' .
			'Investisseur : ' . $donnees['investisseur'] . '<br />' .
			'Structure d\'accueil : ' . $donnees['struct_acc'] . '<br />';
		}

		$reponse->closeCursor();
		
		?>
		
	</section>
    </body>
</html>