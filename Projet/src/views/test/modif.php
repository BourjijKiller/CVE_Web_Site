<?php
$bd=new PDO('mysql:host=localhost;dbname=cve;charset=utf8', 'root', '');
if(isset($_POST['licence_familiale_actif'])){	
	$bd->exec('update sportloisir set prix="'.intval($_POST['licence_familiale_actif']).'" where licence_familiale="1" and actif="1"');
}
if(isset($_POST['licence_familiale_nactif'])){
	$bd->exec('update sportloisir set prix="'.intval($_POST['licence_familiale_nactif']).'" where licence_familiale="1" and actif="0"');
}
if(isset($_POST['licence_adulte_actif'])){
	$bd->exec('update sportloisir set prix="'.intval($_POST['licence_adulte_actif']).'" where adulte="1" and actif="1"');
}
if(isset($_POST['licence_adulte_nactif'])){
	$bd->exec('update sportloisir set prix="'.intval($_POST['licence_adulte_nactif']).'" where adulte="1" and actif="0"');
}
if(isset($_POST['licence_jeune_actif'])){
	$bd->exec('update sportloisir set prix="'.intval($_POST['licence_jeune_actif']).'" where adulte="0" and actif="1"');
}
if(isset($_POST['licence_jeune_nactif'])){
	$bd->exec('update sportloisir set prix="'.intval($_POST['licence_jeune_nactif']).'" where adulte="0" and actif="0"');
}
if(isset($_POST['premier_stage'])){
	$bd->exec('update ecolevoile set prix="'.intval($_POST['premier_stage']).'" where premier_stage_engin="1"');
}
if(isset($_POST['deuxieme_stage'])){
	$bd->exec('update ecolevoile set prix="'.intval($_POST['deuxieme_stage']).'" where premier_stage_engin="0"');
}
if(isset($_POST['planchevoile_seul'])){
	$bd->exec('update coursparticulier set prix="'.intval($_POST['planchevoile_seul']).'" where type_engin="planchevoile" and nb_personne="1"');
}
if(isset($_POST['planchevoile_deux'])){
	$bd->exec('update coursparticulier set prix="'.intval($_POST['planchevoile_deux']).'" where type_engin="planchevoile" and nb_personne="2"');
}
if(isset($_POST['deriveur_seul'])){
	$bd->exec('update coursparticulier set prix="'.intval($_POST['deriveur_seul']).'" where type_engin="deriveur" and nb_personne="1"');
}
if(isset($_POST['deriveur_deux'])){
	$bd->exec('update coursparticulier set prix="'.intval($_POST['deriveur_deux']).'" where type_engin="deriveur" and nb_personne="2"');
}
if(isset($_POST['planchevoile1CVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['planchevoile1CVE']).'" where type_engin="planche" and duree="1" and adherent="1"');
}
if(isset($_POST['planchevoile1nCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['planchevoile1nCVE']).'" where type_engin="planche" and duree="1" and adherent="0"');
}
if(isset($_POST['planchevoile2CVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['planchevoile2CVE']).'" where type_engin="planche" and duree="2" and adherent="1"');
}
if(isset($_POST['planchevoile2nCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['planchevoile2nCVE']).'" where type_engin="planche" and duree="2" and adherent="0"');
}
if(isset($_POST['laserCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['laserCVE']).'" where type_engin="laser" and adherent="1"');
}
if(isset($_POST['lasernCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['lasernCVE']).'" where type_engin="laser" and adherent="0"');
}
if(isset($_POST['funCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['funCVE']).'" where type_engin="funboard" and adherent="1"');
}
if(isset($_POST['funnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['funnCVE']).'" where type_engin="funboard" and adherent="0"');
}
if(isset($_POST['hobCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['hobCVE']).'" where type_engin="hobiecat13" and adherent="1"');
}
if(isset($_POST['hobnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['hobnCVE']).'" where type_engin="hobiecat13" and adherent="0"');
}
if(isset($_POST['420CVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['420CVE']).'" where type_engin="420" and adherent="1"');
}
if(isset($_POST['420nCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['420nCVE']).'" where type_engin="420" and adherent="0"');
}
if(isset($_POST['declicCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['declicCVE']).'" where type_engin="declic" and adherent="1"');
}
if(isset($_POST['declicnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['declicnCVE']).'" where type_engin="declic" and adherent="0"');
}
if(isset($_POST['optimistCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['optimistCVE']).'" where type_engin="optimist" and adherent="1"');
}
if(isset($_POST['optimistnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['optimistnCVE']).'" where type_engin="optimist" and adherent="0"');
}
if(isset($_POST['canoe1h2plCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['canoe1h2plCVE']).'" where type_engin="canoe" and adherent="1"');
}
if(isset($_POST['canoe1h2plnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['canoe1h2plCVE']).'" where type_engin="canoe" and adherent="0"');
}
if(isset($_POST['kayak1h1plCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['kayak1h1plCVE']).'" where type_engin="kayak" and adherent="1" and nb_personnes="1"');
}
if(isset($_POST['kayak1h1plnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['kayak1h1plnCVE']).'" where type_engin="kayak" and adherent="0" and nb_personnes="1"');
}
if(isset($_POST['kayak1h2plCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['kayak1h2plCVE']).'" where type_engin="kayak" and adherent="1" and nb_personnes="2"');
}
if(isset($_POST['kayak1h2plnCVE'])){
	$bd->exec('update voileliberte set prix="'.intval($_POST['kayak1h2plnCVE']).'" where type_engin="kayak" and adherent="0" and nb_personnes="2"');
}
?>


<script type="text/javascript" language="javascript">
  alert("VALEUR MODIFIEE AVEC SUCCES\n");
document.location.replace('affichage_tarifs.php');
</script>;