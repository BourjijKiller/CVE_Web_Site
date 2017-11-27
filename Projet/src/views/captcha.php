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
			Test CAPTCHA
		</title>
	</head>
	<body>
		<div id="wrap">
			<?php include_once('src/views/menu/registerMenu.php'); ?>
			<div style="text-align: center; color: orange;" class = page-header>
				<h1>
					Cercle de voile d'Epinal<br><br>
					<small style="color: orange;">
						Confirmation que vous n'êtes pas un robot
					</small>
				</h1>
			</div>
			<section>
				<div style="margin-left: 2%;">
					<p>
						Bienvenue sur le test Captcha ! <br><br>
						Veuillez indiquer dans la case texte l'image associée
					</p>
				</div>
			</section>
			<div class="row">
				<div class="col-lg-3 col-lg-push-1 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1">
					<form method="post" role="form">
						<div class="form-group">
							<label for="Captcha">Saisir le contenu de l'image : </label>
							<input id="captcha" name="captcha" type="text" class="form-control" placeholder="Entrer le CAPTCHA" autocomplete="off" maxlength="4" required>
						</div>
						<br>
						<div>
							<img src="src/controllers/captchaController.php" />
						</div>
						<br>
						<div class="form-group" align="right">
							<button type="submit" class="btn btn-danger">Envoyer <span class="glyphicon glyphicon-send"></span></button>
						</div>
					</form>
				</div>
			</div>
			<?php 	if(isset($_POST['captcha']))
					{
						if($_POST['captcha'] == $_SESSION['captcha'])
						{
							$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> Captcha valide <br>
								Redirection vers le formulaire ... </div>';
								header('Location:index.php?section=register');
						}

						else
						{
							$_SESSION['flashbagMsgErrors']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Captcha invalide ! Retentez </div>';
						}
					}
					if(!empty($_SESSION['flashbagMsgSuccess']))
					{
						echo('<div class="col-lg-3 col-lg-push-1 alert alert-success">'.$_SESSION['flashbagMsgSuccess'].'</div>');
						unset($_SESSION['flashbagMsgSuccess']);
					}
				?>
				<?php
					if(!empty($_SESSION['flashbagMsgErrors']))
					{
						echo('<div class="col-lg-3 col-lg-push-1 alert alert-danger">'.$_SESSION['flashbagMsgErrors'].'</div>');
						unset($_SESSION['flashbagMsgErrors']);
					}
				?>
		</div>
		<br><br>

		<!-- jQuery CDN -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<!-- Bootstrap JS CDN -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<?php include_once('src/views/footer/footer.php'); ?>
	</body>
</html>