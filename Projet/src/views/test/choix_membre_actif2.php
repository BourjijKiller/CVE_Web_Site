<p>Êtes-vous un membre du Cercle de Voile d'Epinal? : 
	<select name="choix_membre" form="calcul">
		<option value="true" <?php if(isset($_POST['choix_membre'])&&$_POST['choix_membre']=="true") echo 'selected'?>>Oui</option>
		<option value="false" <?php if(isset($_POST['choix_membre'])&&$_POST['choix_membre']=="false") echo 'selected'?>>Non</option>
	</select>
</p>

<?php
	if(isset($_POST['choix_engin2'])&&isset($_POST['choix_membre'])){
		switch($_POST['choix_engin2']){
			case "420":
					$engin='"420"';
					break;
			case "canoe":
					$engin='"canoe"';
					break;
			case "declic":
					$engin='"declic"';
					break;
			case "funboard":
					$engin='"funboard"';
					break;
			case "hobiecat13":
					$engin='"hobiecat13"';
					break;
			case "kayak":
					$engin='"kayak"';
					break;
			case "laser":
					$engin='"laser"';
					break;
			case "optimist":
					$engin='"optimist"';
					break;
			case "planche":
					$engin='"planche"';
					break;		
		}
		if(isset($_POST['duree'])&&$_POST['choix_engin2']=="planche"){
			$requete=$bd->query('select prix from voileliberte where type_engin='.$engin.' and adherent='.$_POST['choix_membre'].' and duree='.$_POST['duree']);
			$res=$requete->fetchAll();
		}
		else{
			if(isset($_POST['kayak'])&&$_POST['choix_engin2']=="kayak"){
				$requete=$bd->query('select prix from voileliberte where type_engin='.$engin.' and adherent='.$_POST['choix_membre'].' and nb_personnes='.$_POST['kayak']);
				$res=$requete->fetchAll();
			}
			else{
				$requete=$bd->query('select prix from voileliberte where type_engin='.$engin.' and adherent='.$_POST['choix_membre']);
				$res=$requete->fetchAll();
			}
		}
	}
?>