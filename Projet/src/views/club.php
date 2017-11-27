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
			Club de Voile
		</title>
	</head>
	<body>
		<?php include_once('src/views/menu/clubMenu.php'); ?>
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

				<marquee align="center" height="200" scrolldelay="5" scrollamount="3" onmouseout="this.start()" onmouseover="this.stop()">
					<p class="bandeau">
						<img border="0" src="web/images/Voile_Groupe.jpg" alt="" hspace="0">
						<img border="0" src="web/images/imgres.jpeg" alt="" hspace="0">
						<img border="0" src="web/images/voile.jpg" alt="" hspace="0">
						<img border="0" src="web/images/voile_486_zoom_colorbox.jpg" alt="" hspace="0">
						<img border="0" src="web/images/voile1.jpg" alt="" hspace="0">
						<img border="0" src="web/images/voile2.jpg" alt="" hspace="0">
						<img border="0" src="web/images/imgres.jpg" alt="" hspace="0">
						<img border="0" src="web/images/images.jpg" alt="" hspace="0">
						<img border="0" src="web/images/voile1.jpg" alt="" hspace="0">
						<img border="0" src="web/images/imgres.jpg" alt="" hspace="0">
						<img border="0" src="web/images/voile_486_zoom_colorbox.jpg" alt="" hspace="0">
					</p>
				</marquee>
				<div class="jumbotron">
					<h2 class="display-3">
						ZONE DE TEXTE
					</h2>
					<hr>
					<p class="lead">
						A REMPLIR
					</p>
				</div>
				
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