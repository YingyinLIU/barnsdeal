<?php

function validation1(){
	
	$valid_nom = (!preg_match("/([^A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['nom']) && (!empty($_POST['nom'])) );
	
	/*$valid_anciennete = (preg_match('/^[0-9]{1,2}$/', $_POST['anciennete']));*/
	
	return true;
	
	
}

?>