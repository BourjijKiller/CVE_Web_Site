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
		<title> Connexion </title>

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
		<?php include_once('src/views/menu/connectMenu.php'); ?>
		<div class="container">
			<?php 
				if(isset($displayOk)&&$displayOk===true)
				{
					include('src/views/success/connectOk.php');
					unset($displayOk);
					header("refresh:4;url=index.php");
				}
			?>

			<div id="container" onKeyPress="if(event.keyCode == 13) validerForm();">
				<form method="POST" id="login">
					<div id="event">
						<label for="name">Login :</label>
						<input type="name" name="uname">
						
						<label for="username">Mot de passe :</label>
						<p>
							<a href="index.php?section=changePassword">Mot de passe oublié ?</a>
						</p>
						<input type="password" name="pword">
						
						<div id="lower">			
							<input type="submit" value="Connection">
						</div>
					</div>
				</form>

				<?php
					if(!empty($_SESSION['flashbagMsgSuccess'])) {
						echo('<div class="col-lg-10 col-lg-push-1 alert alert-success">'.$_SESSION['flashbagMsgSuccess'].'</div>');
						unset($_SESSION['flashbagMsgSuccess']);
					}
				?>
				<?php
					if(!empty($_SESSION['flashbagMsgErrors'])) {
						echo('<div class="col-lg-10 col-lg-push-1 alert alert-danger">'.$_SESSION['flashbagMsgErrors'].'</div>');
						unset($_SESSION['flashbagMsgErrors']);
					}
				?>

			</div>

			<?php if(!isset($_SESSION['uname']))
					{ ?>
						<div id="container2" class="col-lg-10 col-sm-10 col-lg-push-1">
							<h2>
								Pas encore membre ?
							</h2>
							<div>
								<p>
									Cliquez sur le bouton ci-dessous pour vous <strong>inscrire</strong>
								</p>
								<button class="btn btn-warning btn-lg active" onclick="window.location.href='index.php?section=register';">S'enregistrer
								</button>
							</div>
						</div>
			<?php   }
					else
					{ ?>
			<?php   };?>
		</div>

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