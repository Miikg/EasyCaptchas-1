<!doctype html> 
<html>
	<head> 
		<meta charset="utf-8">
		
	</head> 
	<body>
		<p>Veuillez saisir le code de securite ! </p>
		<?php
			
			/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
			* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

			echo "<img src='script-captchas.php' alt='captchas' />";

		?>
		<form id="formulaire" method="post" action="index.php">
			<input type="text" id="code" name="code" onkeyup='this.value=this.value.toUpperCase()' required>
			<input type="submit" id="envoi" name="envoi" value="Envoyer">
		</form>
		<?php
		session_start();
		if(isset($_REQUEST['envoi']))
		{
			if($_SESSION['code']!=$_POST['code'])
			{
				echo "<font color='red'>Code de securite non valide !";
			}
			else
			{
				echo "<font color='green'>Code de securite valide !";
			}
		}
			
		
		?>
	
	</body>
</html>
