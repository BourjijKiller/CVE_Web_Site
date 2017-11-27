<! -- ***** Affichage de la section VOILE LIBERTE ***** -->

<p><h3>Voile liberté</h3>
<?php $requete=$bd->query('select prix from voileliberte where type_engin="planche"');
$resultat=$requete->fetchAll();
?>
<br/>Planche à voile 1h :
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="planchevoile1CVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="planchevoile1nCVE" <?php echo 'value="'.$resultat[2][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>

<br/>Planche à voile 2h :
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="planchevoile2CVE" <?php echo 'value="'.$resultat[1][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="planchevoile2nCVE" <?php echo 'value="'.$resultat[3][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Laser :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="laser"');
$resultat=$requete->fetchAll();
?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="laserCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="lasernCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Funboard :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="funboard"');
$resultat=$requete->fetchAll();

?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="funCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="funnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Hobie Cat 13 :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="hobiecat13"');
$resultat=$requete->fetchAll();

?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="hobCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="hobnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>420 :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="420"');
$resultat=$requete->fetchAll();

?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="420CVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="420nCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Déclic :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="declic"');
$resultat=$requete->fetchAll();
?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="declicCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="declicnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Optimist :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="optimist"');
$resultat=$requete->fetchAll();
?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="optimistCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="optimistnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Canoë 1h - 2 places :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="canoe"');
$resultat=$requete->fetchAll();
?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="canoe1h2plCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="canoe1h2plnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Kayak 1h - 1 place :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="kayak" and nb_personnes=1');
$resultat=$requete->fetchAll();
?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="kayak1h1plCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="kayak1h1plnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
<br/>Kayak 1h - 2 place :
<?php $requete=$bd->query('select prix from voileliberte where type_engin="kayak" and nb_personnes=2');
$resultat=$requete->fetchAll();
?>
<table>
    <tr>
      <td>Adhérents CVE : </td>
      <td>
		<form method="post" action="modif.php">
			<input type="text" name="kayak1h2plCVE" <?php echo 'value="'.$resultat[0][0].'"'?>/>€
			<input type="submit" value="Modifier">
		</form>
		</td>
    </tr>
    <tr>
      <td>Adhésions ponctuelles : </td>
      <td>
	  <form method="post" action="modif.php">
	  <input type="text" name="kayak1h2plnCVE" <?php echo 'value="'.$resultat[1][0].'"'?>>€
	  <input type="submit" value="Modifier">
		</form>
	  </td>
    </tr>
</table>
</p>