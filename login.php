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
	
		<form action="index.php" method="post">
	
			<div>
				<label class="label">IDENTIFIANT</label></br>	
				<input class="field" type="text" name="identifiant">
			</div>	
			
			<div>
				<label class="label">MOT DE PASSE</label></br>	
				<input class="field" type="password" name="password">
			</div>
			
			<div>	
				<input type="submit" name="authentication" value="Valider" />
			</div>
	
		</form>
	
	 </body>
</html>