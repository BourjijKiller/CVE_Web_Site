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
		<link rel="stylesheet" type="text/css" href="web/css/jquery.numpad.css">
		<link rel="stylesheet" type="text/css" href="web/css/numpad.css">

		<!-- Bootstrap CDN -->
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>

		<!-- Jquery CDN -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

		<title>
			Formulaire d'inscription ou de réinscription
		</title>
	</head>
	<body>
		<div id="wrap">
		<?php include_once('src/views/menu/registerMenu.php'); ?>
			<div style="margin-left:3%;margin-right:3%" class = page-header>
				<h1>
					Cercle de la voile d’Épinal<br/>
					<small>
						Réinscription ou demande d'inscription 2015
					</small>
				</h1>
			</div>
			<section class="row" style="margin-left:3%;margin-right:15px;">
	        	<div class="col-lg-8">
					<p>
						Bienvenue sur le formulaire d'inscription ou de réinscription du club de voile !
					</p>
					<p>
						Veuillez remplir les champs du formulaire ci-dessous :
					</p>
				</div>
			</section>
		
		<?php 
			if(!empty($_SESSION['flashbagMsgSuccess'])) {
				echo('<div class="col-lg-10 col-lg-push-1 alert alert-success">'.$_SESSION['flashbagMsgSuccess'].'</div>');
				unset($_SESSION['flashbagMsgSuccess']);
			}
		?>
		<?php 
			if(!empty($_SESSION['flashbagMsgErrors'])) {
				foreach ($_SESSION['flashbagMsgErrors'] as $err) {
					echo('<div class="col-lg-10 col-lg-push-1 alert alert-danger">'.$err.'</div>');
				}
				unset($_SESSION['flashbagMsgErrors']);
			}
		?>
		<?php include_once('src/views/forms/registerForm.php');  ?>
		
		</div>

		<!-- jQuery CDN -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!-- Bootstrap JS CDN -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Custom JS -->
		<script type="text/javascript" src='web/js/datepicker.js'></script>
		<script type="text/javascript" src="web/js/jquery.numpad.js"></script>
		<script type="text/javascript">
			$.fn.numpad.defaults.gridTpl = '<table class="table modal-content"></table>';
			$.fn.numpad.defaults.backgroundTpl = '<div class="modal-backdrop in"></div>';
			$.fn.numpad.defaults.displayTpl = '<input type="text" class="form-control"/>';
			$.fn.numpad.defaults.buttonNumberTpl =  '<button type="button" class="btn btn-default"></button>';
			$.fn.numpad.defaults.buttonFunctionTpl = '<button type="button" class="btn" style="width: 100%;"></button>';
			$.fn.numpad.defaults.onKeypadCreate = function(){$(this).find('.done').addClass('btn-info');};
			$(document).ready(function(){
				$('#numpad').numpad();
			});
		</script>
		<script type="text/javascript" src="web/js/verify_form.js"></script>
		<script type="text/javascript" src="web/js/decompte.js"></script>

		<?php include_once('src/views/footer/footer.php'); ?>
		
	</body>
</html>