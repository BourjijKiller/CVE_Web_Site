<?php
if(isset($_POST['choix_engin2'])){
	if($_POST['choix_engin2']=="kayak"){
		echo "Choisir le nombre de personnes : ";
		include("form_kayak.php");
	}
}
?>