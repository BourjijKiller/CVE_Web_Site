<p>Combien de personnes êtes-vous? : 
	<select name="nombre_personnes" form="calcul">
		<option value="1" <?php if(isset($_POST['nombre_personnes'])&&$_POST['nombre_personnes']=="1") echo 'selected'?>>1</option>
		<option value="2" <?php if(isset($_POST['nombre_personnes'])&&$_POST['nombre_personnes']=="2") echo 'selected'?>>2</option>
	</select>
</p>


<?php
	if(isset($_POST['choix_engin'])&&isset($_POST['nombre_personnes'])){
		if($_POST['choix_engin']=="planche")
			$engin='"planchevoile"';
		else
			$engin='"deriveur"';
		if($_POST['nombre_personnes']=="1")
			$nb_personne=1;
		else
			$nb_personne=2;
		$requete=$bd->query('select prix from coursparticulier where type_engin='.$engin.' and nb_personne='.$nb_personne);
		$res=$requete->fetchAll();
	}
?>