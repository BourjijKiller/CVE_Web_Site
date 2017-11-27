<p>S'agit-il de votre premier stage sur le type d'engin voulu? : 
	<select name="premier_stage" form="calcul">
		<option value="true" <?php if(isset($_POST['premier_stage'])&&$_POST['premier_stage']=="true") echo 'selected'?>>Oui</option>
		<option value="false" <?php if(isset($_POST['premier_stage'])&&$_POST['premier_stage']=="false") echo 'selected'?>>Non</option>
	</select>
</p>

<?php
	if(isset($_POST['premier_stage'])){
		$requete=$bd->query('select prix from ecolevoile where premier_stage_engin='.$_POST['premier_stage']);
		$res=$requete->fetchAll();
	}
?>