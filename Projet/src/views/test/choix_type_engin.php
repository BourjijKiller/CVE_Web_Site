<p>Par quel type d'engin êtes-vous intéressé? : 
	<select name="choix_engin" form="calcul">
		<option value="planche" <?php if(isset($_POST['choix_engin'])&&$_POST['choix_engin']=="planche") echo 'selected'?>>Planche à voile</option>
		<option value="deriveur" <?php if(isset($_POST['choix_engin'])&&$_POST['choix_engin']=="deriveur") echo 'selected'?>>Dériveur</option>
	</select>
</p>
