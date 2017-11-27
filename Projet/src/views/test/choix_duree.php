<?php
if(isset($_POST['choix_engin2'])){
	if($_POST['choix_engin2']=="planche"){
		echo "Choisir une durée : ";
		include("form_duree.php");
	}
}
?>