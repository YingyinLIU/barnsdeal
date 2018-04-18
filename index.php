<?php

	if (isset($_POST['authentication'])){	

		try{
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
		}

		catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
				
		/*$login = htmlspecialchars($_POST['login']);*/
						
		$req = $bdd->prepare('SELECT COUNT(*) FROM authentification WHERE ID = ?');
		$req->execute(array($_POST['identifiant']));
				
		if ($req->fetchColumn() == 0){
			$req->closeCursor();
			//INDIQUER MOT DE PASSE ERRONE
			include("login.php");
		}
		
		else{			
			$req->closeCursor();
			session_start();
			$_SESSION['id'] = $_POST['identifiant'];
			$_SESSION['avancement'] = 0;
			include("questionnaire.php");
		}
	}
	
	else{
		include("login.php");		
	}


?>