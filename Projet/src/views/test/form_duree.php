<select name="duree" form="calcul">
	<option value="1" <?php if(isset($_POST['duree'])&&$_POST['duree']=="1") echo 'selected'?>>1 heure</option>
	<option value="2" <?php if(isset($_POST['duree'])&&$_POST['duree']=="2") echo 'selected'?>>2 heures</option>
</select>