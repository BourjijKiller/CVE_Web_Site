<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Récapitulatif des tarifs</title>
	</head>
	<body>
		<?php $bd=new PDO('mysql:host=localhost;dbname=cve;charset=utf8', 'root', '');?>
		<h1>Récapitulatif des tarifs</h1>
		<p>Choisir le type de formule à afficher</p>
		<select name="choix" form="formule">
			<option value="sportloisir" <?php if(isset($_POST['choix'])&&$_POST['choix']=="sportloisir") echo 'selected'?>>Sport Loisir</option>
			<option value="ecolevoile"<?php if(isset($_POST['choix'])&&$_POST['choix']=="ecolevoile") echo 'selected'?>>Ecole de Voile</option>
			<option value="coursparticulier"<?php if(isset($_POST['choix'])&&$_POST['choix']=="coursparticulier") echo 'selected'?>>Cours Particulier</option>
			<option value="voileliberte"<?php if(isset($_POST['choix'])&&$_POST['choix']=="voileliberte") echo 'selected'?>>Voile Liberté</option>
		</select>
		<form method="post" id="formule">
			<input type="submit">
		</form>		
		<?php 
		if (isset($_POST['choix'])){
			switch ($_POST['choix']) {
				case "sportloisir":
					include("affichage_tarifs_sportloisir.php");
					break;
				case "ecolevoile":
					include("affichage_tarifs_ecolevoile.php");
					break;
				case "coursparticulier":
					include("affichage_tarifs_coursparticulier.php");
					break;
				case "voileliberte":
					include("affichage_tarifs_voileliberte.php");
					break;
			}
		}
		?>
	</body>
</html>