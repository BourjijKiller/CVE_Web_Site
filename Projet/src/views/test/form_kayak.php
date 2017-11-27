<select name="kayak" form="calcul">
	<option value="1" <?php if(isset($_POST['kayak'])&&$_POST['kayak']=="1") echo 'selected'?>>1</option>
	<option value="2" <?php if(isset($_POST['kayak'])&&$_POST['kayak']=="2") echo 'selected'?>>2</option>
</select>