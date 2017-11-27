<! -- ***** Affichage de la section SPORT LOISIR ***** -->


<p><h3>Sport Loisir</h3>
  <table>
    <tr>
		<?php $requete=$bd->query('select prix from sportloisir where licence_familiale="1"');
		$resultat=$requete->fetchAll();
		?>
      <td>Licence familale membre actif : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="licence_familiale_actif" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Licence familiale membre honoraire : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="licence_familiale_nactif" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
    <tr>
		<?php $requete=$bd->query('select prix from sportloisir where adulte="1"');
		$resultat=$requete->fetchAll();
		?>
      <td>Licence adulte membre actif : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="licence_adulte_actif" <?php echo 'value="'.$resultat[0][0].'"'?>>€
	  	<input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
    <tr>
      <td>Licence adulte membre honoraire</td>
      <td>
	   <form method="post" action="modif.php">
	  <input type="text" name="licence_adulte_nactif" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
    <tr>
		<?php $requete=$bd->query('select prix from sportloisir where adulte="0" and licence_familiale="0"');
		$resultat=$requete->fetchAll();
		
		?>
      <td>Licence jeune membre actif : </td>
      <td>
	   <form method="post" action="modif.php">
	  <input type="text" name="licence_jeune_actif" <?php echo 'value="'.$resultat[0][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Licence jeune membre honoraire</td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="licence_jeune_nactif" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>

  </table>
</body>
</html>