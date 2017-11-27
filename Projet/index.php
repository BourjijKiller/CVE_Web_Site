<?php

if (!isset($_GET['section']) or $_GET['section'] == 'index')
{
	include_once('src/controllers/indexController.php');
}

else
{
	switch ($_GET['section'])
	{
		case 'club':
			include_once('src/controllers/clubController.php');
			break;

		case 'ecole':
			include_once('src/controllers/ecoleController.php');
			break;

		case 'connect':
			include_once('src/controllers/loginController.php');
			break;
		
		case 'register':
			include_once('src/controllers/registerController.php');
			break;

		case 'logout':
			include_once('src/controllers/loginController.php');
			break;

		case 'regime':
			include_once('src/controllers/regimeController.php');
			break;

		case 'changePassword':
			include_once('src/controllers/changePasswordController.php');
			break;

		case 'code':
			include_once('src/controllers/changePasswordController.php');
			break;

		case 'changemdp':
			include_once('src/controllers/changePasswordController.php');
			break;

		case 'captcha':
			include_once('src/views/captcha.php');
			break;

		default:
			header('Location: index.php');
	}
}