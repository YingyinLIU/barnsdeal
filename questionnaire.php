<?php 

if(!isset($_SESSION)){
	session_start();
}

include("functions/fieldValidation.php");
include("functions/sendData.php");
include("functions/loadForm.php");

if ((isset($_POST['form1'])) && (validation1())){	sendData1();	}

if (isset($_POST['form2'])){	sendData2();	}

if (isset($_POST['form3'])){	sendData3();	}

if (isset($_POST['form4'])){	sendData4();	}

if (isset($_POST['form5'])){	sendData5();	}

if (isset($_POST['form6'])){	sendData6();	}

if (isset($_POST['form7'])){	sendData7();	}

				
if($_SESSION['avancement']==0){ 		
	loadForm1();		
}
		
if($_SESSION['avancement']==1){ 		
	loadForm2();			
}
		
if($_SESSION['avancement']==2){ 		
	loadForm3();		
}

if($_SESSION['avancement']==3){ 		
	loadForm4();		
}

if($_SESSION['avancement']==4){ 		
	loadForm5();		
}

if($_SESSION['avancement']==5){ 		
	loadForm6();		
}

if($_SESSION['avancement']==6){ 		
	loadForm7();		
}

if($_SESSION['avancement']==7){ 		
	loadRemerciements();		
}
		
?>
	
	