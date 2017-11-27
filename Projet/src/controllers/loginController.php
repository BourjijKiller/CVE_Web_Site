<?php 

/*
Page: loginController.php
*/

include_once('app/config/dbconnect.php');
include_once('src/models/issetLogin.php');
include_once('src/models/getPassword.php');

if(session_status() === PHP_SESSION_NONE) //Pour vérifier la valeur et le type
{
	session_start();
}

unset($_SESSION['captcha']);

if(!isset($_SESSION['uname']))
{
	if(!empty($_POST))
	{
		if(empty($_POST['uname']) && empty($_POST['pword']))
		{
			$_SESSION['flashbagMsgErrors']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Les deux champs sont vides ! </div>';
		}

		else if(empty($_POST['uname']) || empty($_POST['pword']))
		{
			$_SESSION['flashbagMsgErrors']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Un des deux champs est vide ! </div>';
		}

		else
		{
			// Tout les champs sont remplies, on test si il existe dans la base de donnée
			$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
			if(issetLogin($_POST['uname']) && password_verify($_POST['pword'], getPassword($_POST['uname'])))
			{
				setcookie('CookieUsers', $_POST['uname'], time()+30*24*60*60); // Cookie valable 30 jours
				$_SESSION['uname'] = $_POST['uname'];
				$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> Utilisateur <strong>'.$_POST['uname'].'</strong> connecté avec succès ! </div>';
				$displayOk=true;
			}
			else
			{
				$_SESSION['flashbagMsgErrors']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Utilisateur <strong>'.$_POST['uname'].'</strong> non existant ! Erreur de connection </div>';
			}
		}
	}

	include_once('src/views/connect.php');

}
else
{
	if(!empty($_POST['logoutYes']))
	{
		$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> Déconnexion effectuée ! <br>
			Redirection vers la page d\'accueil ... </div>';
		setcookie('CookieUsers', $_SESSION['uname'], time()-3600); // Détruit le cookie
		unset($_SESSION['uname']);
		//session_destroy();
		header("refresh:5;url=index.php");
	}

	else if(!empty($_POST['logoutNo']))
	{
		$_SESSION['flashbagMsgErrors']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Déconnexion non effectuée ! <br>
			Redirection vers la page d\'accueil ... </div>';
		header("refresh:5;url=index.php");
	}

	include_once('src/views/logout.php');
}