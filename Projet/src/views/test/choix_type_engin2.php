<p>Par quel type d'engin êtes-vous intéressé? : 
	<select name="choix_engin2" form="calcul">
		<option value="planche" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="planche") echo 'selected'?>>Planche à voile</option>
		<option value="laser" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="laser") echo 'selected'?>>Laser</option>
		<option value="funboard" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="funboard") echo 'selected'?>>Funboard</option>
		<option value="hobiecat13" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="hobiecat13") echo 'selected'?>>Hobie Cat 13</option>
		<option value="420" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="420") echo 'selected'?>>420</option>
		<option value="declic" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="declic") echo 'selected'?>>Déclic</option>
		<option value="optimist" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="optimist") echo 'selected'?>>Optimist</option>
		<option value="canoe" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="canoe") echo 'selected'?>>Canoë</option>
		<option value="kayak" <?php if(isset($_POST['choix_engin2'])&&$_POST['choix_engin2']=="kayak") echo 'selected'?>>Kayak</option>
	</select>
</p>