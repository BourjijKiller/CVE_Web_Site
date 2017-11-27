<?php 
	if(session_status() === PHP_SESSION_NONE)
	{
		session_start();
	}
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="web/css/style.css" type="text/css">

		<!-- Bootstrap CDN -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<!-- Jquery CDN -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

		<title>
			Choix du régime
		</title>
	</head>
	<body>
	<?php include_once('src/views/menu/regimeMenu.php'); ?>
	<form method="POST">
	<div id="body" class="regime">
		<div class="tab2 col-lg-6">
			<h2>
				Pour tout types de membres
			</h2>
			<table>
				<caption>
					Sport loisir
				</caption>

				<tr>
					<th>
						<span id="wrt">
							Membres actifs / honoraires - Cotisations
						</span>
					</th>
					<th>
						<span id="wrt">
							Prix (cocher si choix)
						</span>
					</th>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Licence Familiale
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox1" value="checkbox1">
							124€
						</label>
					</td>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Licence Adulte né avant le 1.1.95
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox2" value="checkbox2">
							109€
						</label>
					</td>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Licence Jeune né à partir du 1.1.95
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox3" value="checkbox3">
							75€
						</label>
					</td>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Renouvellement Licence Familiale
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox4" value="checkbox4">
							108€
						</label>
					</td>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Renouvellement Licence Adulte né avant le 1.1.95
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox5" value="checkbox5">
							84€
						</label>
					</td>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Renouvellement Licence Jeune né à partir du 1.1.95
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox6" value="checkbox6">
							68€
						</label>
					</td>
				</tr>
			</table>
			<br><br><br>
			<h2>
				Ecole de voile
			</h2>
			<section>
				<p>
					En ce qui concerne la planche à voile, optimist ou encore dériveur :
					<br>
					<ul>
						<li>
							<p style="color: orange;">
								Les 5 demi-journée de 14 h à 17 h : 70€ le 1er stage
							</p>
						</li>
						<li>
							<p style="color: orange;">
								55 Euros le stage suivant sur le même engin
							</p>
						</li>
					</ul>
				</p>
			</section>
				<br><br><br>
			<?php if(empty($_POST))
					{ ?>
						<button type="submit" class="btn btn-info" name="bouton"> Calculer prix total <span class="glyphicon glyphicon-shopping-cart"></span></button>
			<?php 	}
					else
					{ ?>
						<button type="submit" class="btn btn-warning" name="bouton2"> Actualiser panier <span class="glyphicon glyphicon-shopping-cart"></span></button>
			<?php 	} ?>
			<br><br>
			<?php if(isset($_POST['bouton']) || isset($_POST['bouton2']))
					{ ?>
						<h2>
							Récapitulatif de commande
							<small style="color: orange;">
								Veuillez trouver ci-dessous le récapitulatif de votre commande :
							</small>
						</h2>
						<br><br>
				<?php if(empty($_POST['checkbox1']) && empty($_POST['checkbox2']) && empty($_POST['checkbox3']) && empty($_POST['checkbox4']) && empty($_POST['checkbox5']) && empty($_POST['checkbox6']) && empty($_POST['checkbox7']) && empty($_POST['checkbox8']) && empty($_POST['checkbox9']) && empty($_POST['checkbox10']) && $_POST['planche1h'] == "none" && $_POST['planche2h'] == "none" && $_POST['laser2-3h'] == "none" && $_POST['laserpico'] == "none" && $_POST['funboard'] == "none" && $_POST['hobiecat13'] == "none" && $_POST['420_2-3h'] == "none" && $_POST['declic2-3h'] == "none" && $_POST['optimist2-3h'] == "none" && empty($_POST['canoe']) && empty($_POST['kayak_1H1P']) && empty($_POST['kayak_1H2P']))
						{
							echo('<div style="color:red;font-weight:bold;"><span class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span> Panier vide ! </span></div>');
						}

						else
						{
							
						}

				 	} ?>
		</div>
		<div class="tab2 col-lg-6 col-lg-push-1">
			<h2>
				Pour tout types de membres
			</h2>
			<table>
				<caption>
					Cours particulier sur rendez-vous
				</caption>

				<tr>
					<th>
						<span id="wrt">
							Cours
						</span>
					</th>
					<th>
						<span id="wrt">
							Nombre de personne(s)
						</span>
					</th>
					<th>
						<span id="wrt">
							Nombre d'heure(s)
						</span>
					</th>
					<th>
						<span id="wrt">
							Prix (cocher si choix)
						</span>
					</th>
				</tr>

				<tr>
					<td rowspan="2">
						<span id="wrt">
							Planche à voile
						</span>
					</td>
					<td>
						<span id="wrt">
							1 personne
						</span>
					</td>
					<td>
						<span id="wrt">
							2H
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox7" value="checkbox7">
							40€
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							2 personnes
						</span>
					</td>
					<td>
						<span id="wrt">
							2H
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox8" value="checkbox8">
							60€
						</label>
					</td>
				</tr>
				<tr>
					<td rowspan="2">
						<span id="wrt">
							Dériveur
						</span>
					</td>
					<td>
						<span id="wrt">
							1 personne
						</span>
					</td>
					<td>
						<span id="wrt">
							2H
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox9" value="checkbox9">
							50€
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							2 personnes
						</span>
					</td>
					<td>
						<span id="wrt">
							2H
						</span>
					</td>
					<td>
						<label id="wrt">
							<input type="checkbox" name="checkbox10" value="checkbox10">
							70€
						</label>
					</td>
				</tr>
			</table>
			<br><br><br>
		</div>
		<div class="tab2 col-lg-6 col-lg-push-1">
			<table>
				<caption>
					Voile liberté
				</caption>

				<tr>
					<th>
						<span id="wrt">
							Engins
						</span>
					</th>
					<th>
						<span id="wrt">
							Adhérents CVE
						</span>
					</th>
					<th>
						<span id="wrt">
							Prix correspondants
						</span>
					</th>
				</tr>

				<tr>
					<td>
						<span id="wrt">
							Planche 1h
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="planche1h" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="planche1h" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="planche1h" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="planche1h">3€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Planche 2H
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="planche2h" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="planche2h" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="planche2h" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="planche2h">5€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Laser 2 à 3H
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="laser2-3h" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="laser2-3h" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="laser2-3h" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="laser2-3h">7€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Laser pico
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="laserpico" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="laserpico" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="laserpico" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="laserpico">7€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Funboard
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="funboard" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="funboard" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="funboard" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="funboard">7€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Hobie Cat 13
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="hobiecat13" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="hobiecat13" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="hobiecat13" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="hobiecat13">7€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							420 2 à 3H
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="420_2-3h" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="420_2-3h" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="420_2-3h" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="420_2-3h">10€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Déclic 2 à 3H
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="declic2-3h" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="declic2-3h" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="declic2-3h" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="declic2-3h">10€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Optimist 2 à 3H
						</span>
					</td>

					<td>
						<div>
							<label id="wrt">
								<input type="radio" name="optimist2-3h" value="oui" checked>
								Oui
							</label>
							<br>
							<label>
								<input type="radio" name="optimist2-3h" value="non">
								Non
							</label>
							<br>
							<label>
								<input type="radio" name="optimist2-3h" value="none">
								None
							</label>
						</div>
					</td>
					<td>
						<span id="optimist2-3h">3€</span>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Canoé 1H pour 2 places
						</span>
					</td>

					<td colspan="2">
						<label id="wrt">
							<input type="checkbox" name="canoe" value="canoe">
							6€
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Kayak 1H pour 1 place
						</span>
					</td>

					<td colspan="2">
						<label id="wrt">
							<input type="checkbox" name="kayak_1H1P" value="kayak_1H1P">
							4€
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<span id="wrt">
							Kayak 1H pour 2 places
						</span>
					</td>

					<td colspan="2">
						<label id="wrt">
							<input type="checkbox" name="kayak_1H2P" value="kayak_1H2P">
							4€
						</label>
					</td>
				</tr>
			</table>
		<br><br><br><br>
		</div>
		<?php
			if(!empty($_SESSION['flashbagMsgSuccess']))
			{
				echo('<div class="col-lg-10 col-lg-push-1 alert alert-success">'.$_SESSION['flashbagMsgSuccess'].'</div>');
				unset($_SESSION['flashbagMsgSuccess']);
			}
		?>
		<?php
			if(!empty($_SESSION['flashbagMsgErrors']))
			{
				echo('<div class="col-lg-10 col-lg-push-1 alert alert-danger">'.$_SESSION['flashbagMsgErrors'].'</div>');
				unset($_SESSION['flashbagMsgErrors']);
			}
		?>
	</div>
	</form>


		<!-- jQuery CDN -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<!-- Bootstrap JS CDN -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script type="text/javascript" src="web/js/func.js"></script>

		<?php include_once('src/views/footer/footer.php'); ?>
	</body>
</html>