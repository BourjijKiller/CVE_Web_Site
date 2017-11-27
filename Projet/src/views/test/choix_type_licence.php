<p>Choisir un type de licence : 
	<select name="choix_licence" form="calcul">
		<option value="licence_familiale" <?php if(isset($_POST['choix_licence'])&&$_POST['choix_licence']=="licence_familiale") echo 'selected'?>>Licence familiale</option>
		<option value="adulte" <?php if(isset($_POST['choix_licence'])&&$_POST['choix_licence']=="adulte") echo 'selected'?> >Adulte</option>
		<option value="jeune" <?php if(isset($_POST['choix_licence'])&&$_POST['choix_licence']=="jeune") echo 'selected'?> >Jeune</option>
	</select>
</p>