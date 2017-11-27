<! -- ***** Affichage de la section COURS PARTICULIERS ***** -->

<p><h3>Cours particuliers</h3>
<br/>Planche à voile :
<?php $requete=$bd->query('select prix from coursparticulier where type_engin="planchevoile"');
$resultat=$requete->fetchAll();

?>
<table>
    <tr>
      <td>Personne seule : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="planchevoile_seul" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Deux personnes : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="planchevoile_deux" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Deriveur :
<?php $requete=$bd->query('select prix from coursparticulier where type_engin="deriveur"');
$resultat=$requete->fetchAll();

?>
<table>
    <tr>
      <td>Personne seule : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="deriveur_seul" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Deux personnes : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="deriveur_deux" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
</p>