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
		<title> Modification de compte </title>

		<!-- CSS -->
		<link rel="stylesheet" href="web/css/connect.css" type="text/css">
		<link rel="stylesheet" href="web/css/animate.css" type="text/css">
		<link rel="stylesheet" href="web/css/style.css" type="text/css">

		<!-- Bootstrap CDN -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<!-- Jquery CDN -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	</head>
	<body>
		<div id="wrap">
			<?php include_once('src/views/menu/changePasswordMenu.php'); ?>
				<div style="text-align: center; color: orange;" class = page-header>
					<h1>
						Cercle de voile d'Epinal<br><br>
						<small style="color: orange;">
							Demande de changement de mot de passe
						</small>
					</h1>
				</div>
				<section>
					<div style="margin-left: 2%;">
						<p>
							Bienvenue sur le formulaire de changement de mot de passe !
						</p>
						<?php
							if($_GET['section'] == 'changePassword')
							{ ?>
								<p>
									Indiquez ci-dessous votre adresse email
								</p>
						<?php } ?>
					</div>
				</section>
			<?php
				if($_GET['section'] == 'code')
				{ ?>
					<p style="margin-left: 2%;">
						Récupération de mot de passe pour <b> <?= $_SESSION['change_email'] ?> </b>
					</p>
					<br>
					<div class="row">
						<div class="col-lg-3 col-lg-push-1 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1">
							<form method="post" role="form">
								<div class="form-group">
									<label for="Code">Code de vérification :</label>
									<input id="code" name="code" type="text" class="form-control" placeholder="Entrer votre code reçu par email" autocomplete="off" required>
								</div>
								<br>
								<div class="form-group" align="right">
									<button type="submit" class="btn btn-info">Envoyer <span class="glyphicon glyphicon-send"></span></button>
								</div>
							</form>
						</div>
					</div>
			<?php }
				else if($_GET['section'] == 'changePassword')
				{ ?>
					<div class="row">
						<div class="col-lg-3 col-lg-push-1 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1">
							<form method="post" role="form">
								<div class="form-group">
									<label for="Email">Email :</label>
									<input id="change_email" name="change_email" type="email" class="form-control" placeholder="Entrer votre adresse email" autocomplete="off" required>
								</div>
								<br>
								<div class="form-group" align="right">
									<button type="submit" class="btn btn-info">Envoyer <span class="glyphicon glyphicon-envelope"></span></button>
								</div>
							</form>
						</div>
					</div>
			<?php }
			else
				{ ?>
					<p style="margin-left: 2%;">
						Nouveau mot de passe pour <b> <?= $_SESSION['change_email'] ?> </b>
					</p>
					<div class="row">
						<div class="col-lg-3 col-lg-push-1 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1">
							<form method="post" role="form">
								<div class="form-group">
									<label for="password">Nouveau mot de passe :</label>
									<input id="change_password" name="change_password" type="password" class="form-control" placeholder="Nouveau mot de passe" autocomplete="off" required>
								</div>
								<div class="form-group">
									<label for="password_confirm">Confirmation du nouveau mot de passe :</label>
									<input id="change_password_confirm" name="change_password_confirm" type="password" class="form-control" placeholder="Nouveau mot de passe" autocomplete="off" required>
								</div>
								<br>
								<div class="form-group" align="right">
									<button type="submit" class="btn btn-info">Confirmer <span class="glyphicon glyphicon-ok-sign"></span></button>
								</div>
							</form>
						</div>
					</div>
			<?php }
				if(!empty($_SESSION['flashbagMsgSuccess']))
				{
					echo('<div class=row>');
					echo('<div class="col-lg-5 col-lg-push-1 alert alert-success">'.$_SESSION['flashbagMsgSuccess'].'</div>');
					echo('</div>');
					unset($_SESSION['flashbagMsgSuccess']);
				}
			?>
			<?php 
				if(!empty($_SESSION['flashbagMsgErrors']))
				{
					echo('<div class=row>');
					foreach ($_SESSION['flashbagMsgErrors'] as $err)
					{
						echo('<div class="col-lg-3 col-lg-push-1 alert alert-danger">'.$err.'</div>');
					}
					echo('</div>');

					unset($_SESSION['flashbagMsgErrors']);
				}
			?>
		</div>
		<br><br><br><br>

		<!-- jQuery CDN -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!-- Javascript -->
		<script src="web/js/custom.js"></script>
		<script type="text/javascript" src="web/js/decompte2.js"></script>

		<!-- Bootstrap JS CDN -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<?php include_once('src/views/footer/footer.php'); ?>

	</body>
</html>