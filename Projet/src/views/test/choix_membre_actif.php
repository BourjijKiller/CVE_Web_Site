<p>Êtes-vous un membre du Cercle de Voile d'Epinal? : 
	<select name="choix_membre" form="calcul">
		<option value="true" <?php if(isset($_POST['choix_membre'])&&$_POST['choix_membre']=="true") echo 'selected'?>>Oui</option>
		<option value="false" <?php if(isset($_POST['choix_membre'])&&$_POST['choix_membre']=="false") echo 'selected'?>>Non</option>
	</select>
</p>

<?php
	if(isset($_POST['choix_licence'])&&isset($_POST['choix_membre'])){
		if($_POST['choix_licence']=="licence_familiale")
			$licence_familiale="true";
		else
			$licence_familiale="false";
		if($_POST['choix_licence']=="adulte")
			$licence_adulte="true";
		else
			$licence_adulte="false";
		$requete=$bd->query('select prix from sportloisir where licence_familiale='.$licence_familiale.' and adulte='.$licence_adulte.' and actif='.$_POST['choix_membre']);
		$res=$requete->fetchAll();

	}
?>

