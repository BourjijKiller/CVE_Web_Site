<! -- ***** Affichage de la section ECOLE DE VOILE ***** -->

<p><h3>Ecole de voile</h3>
<?php $requete=$bd->query('select prix from ecolevoile');
$resultat=$requete->fetchAll();
?>


<table>
    <tr>
      <td>Premier stage : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="premier_stage" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Deuxième stage sur même engin : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="deuxieme_stage" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
</p>