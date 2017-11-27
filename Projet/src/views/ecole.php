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


		<!-- Bootstrap CDN -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="web/css/style.css" type="text/css">

		<!-- Jquery CDN -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

		<title>
			Ecole de Voile
		</title>
	</head>
	<body>
		<?php include_once('src/views/menu/ecoleMenu.php'); ?>
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

			<div id="body" class="home">

				<div class="jumbotron">
					<h2 class="display-3">
						Qu'est ce que l'école de voile ?
					</h2>
					<hr>
					<p class="lead">
						Un programme d’initiation et perfectionnement sur planche à voile, dériveur et optimist, en  juillet et août.
						Il faut être âgé de 7 ans au moins pour un stage d’optimist, être âgé d'au moins 9 ans pour un stage de planche à voile et être munie d’une autorisation parentale et savoir nager 25 mètres.
					</p>
				</div>
				
				<div class="jumbotron">
					<div class="tab">
						<h2 class="display-3">
							Planning
						</h2>
						<hr>
						<?php
							include_once('src/views/admin_ecole/vueAdmin.php');
						?>
						<br><br>
						<p>
							D’autres stages peuvent être programmés à la demande de groupe (6 à 20 personnes) ou encore des cours particuliers.
						</p>
					</div>
				</div>
				<div class="jumbotron">
					<h2 class="display-3">
						Comment s'inscrire ?
					</h2>
					<hr>
					<p>
						S’inscrire avant le 4 juillet à la base les samedis et dimanches après-midi.
					</p>

					<p>
						S’inscrire après le 4 juillet tous les après-midi à la base
						ou par courrier à une des adresses ci-dessous :
					</p>

					<table border="0">
						<tbody>
							<tr>
								<td>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								</td>
								<td>
									<p><u>Roland Dieudonné</u> <br>
									15, rue des Chênes<br>
									88390 LES FORGES<br>
									03 29 35 18 85<br>
									06 38 26 65 88<br>
									roland.dieudonne@sfr.fr</p>
								</td>
								<td>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								</td>
								<td>
									<p><u>Siège social et Base Bouzey</u><br>
									939, Chemin d'Ambafosse<br>
									88390 Chaumousey<br>
									03 29 66 89 88<br>
									06 38 26 65 88</p>
								</td>
							</tr>
						</tbody>
					</table><br>

					<p>
						Adresser une demande et 50% de la somme correspondant  à l’inscription en indiquant : <br>

						Nom, prénom, âge, adresse, le type de stage (planche, optimist, dériveur, catamaran)
						les N° et dates du stage.
					</p>
					<p>
						<b>Joindre l’autorisation parentale.</b>
					</p>
				</div>

				<div class="jumbotron">
					
						<h2 class="display-3">
							Les prix
						</h2>
						<hr>
						<p>
							Planche, dériveur ou optimist --> 5 demi-journées de 14 h à 17 h.<br>
							<br>
							70€ le 1er stage (65€ pour les membres du Club de Voile)<br>
							55€ le stage suivant sur le même engin.<br>
							<br>
							Les chèques vacances sont acceptés.<br>
						</p>
				</div>
			</div>
			<br><br>
			<div style="text-align: center;">
				<p>
					<a href="src/controllers/PDF/PT3.pdf" download="PT3.pdf" class="btn btn-info btn-lg" title="Télécharger la brochure">En savoir plus  <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
				</p>
			</div>
			<br><br><br><br><br>
		</div>

		<!-- jQuery CDN -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<!-- Bootstrap JS CDN -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<?php include_once('src/views/footer/footer.php'); ?>
	</body>
</html>