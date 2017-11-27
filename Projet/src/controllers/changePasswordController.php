<?php
/*
Page : changePasswordController.php
*/

include_once('app/config/dbconnect.php');
include_once('src/models/issetEmail.php');

if(session_status() === PHP_SESSION_NONE)
{
	session_start();
}

if(isset($_POST) && !empty($_POST))
{
	if($_GET['section'] == 'changePassword')
	{
		$cmdpValid=true;
		if(!filter_var($_POST['change_email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['flashbagMsgErrors']['change_email']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> L\'adresse email spécifiée est invalide ! </div>';
			$cmdpValid=false;
		}

		else
		{
			if(issetEmail($_POST['change_email']))
			{
				$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> L\'adresse email est bien enregistrée ! </div>';
			}

			else
			{
				$_SESSION['flashbagMsgErrors']['change_email']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> L\'adresse email spécifiée n\'est pas enregistrée ! </div>';
				$cmdpValid=false;
			}
		}

		if($cmdpValid)
		{
			$recup_mail = htmlspecialchars($_POST['change_email']);
			$_SESSION['change_email'] = $recup_mail;
			$recup_code = "";
			for ($i=0; $i < 8; $i++)
			{ 
				$recup_code .= mt_rand(0,9);
			}
			//var_dump($recup_code);
			//$_SESSION['recup_code'] = $recup_code;
			$pdo = new PDO("mysql:host=;dbname=$dbname;charset=utf8",$login,$pass);

			$recup_mail_exist = $pdo->prepare('SELECT id FROM recuperation WHERE mail = ?');
			$recup_mail_exist->execute(array($recup_mail));
			$recup_mail_exist= $recup_mail_exist->rowCount();

			if($recup_mail_exist == 1)
			{
				$stmt = $pdo->prepare('UPDATE recuperation SET code = ? WHERE mail = ?');
				$stmt->execute(array($recup_code, $recup_mail));
			}

			else
			{
				$stmt = $pdo->prepare('INSERT INTO recuperation (mail,code) VALUES (?,?)');
				$stmt->execute(array($recup_mail, $recup_code));
			}

			include_once('src/models/mail.php');
			mail($recup_mail,$sujet,$message,$header);
			if(mail($recup_mail,$sujet,$message,$header))
			{
				$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> Adresse email valide ! Un email de vérification vous a été envoyé</div>';
				header('Refresh:5;url=index.php?section=code');
			}
			
			else
			{
				$_SESSION['flashbagMsgErrors']['change_email']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> L\'adresse email spécifiée n\'existe pas ! </div>';
			}
		}
	}

	if($_GET['section'] == 'code')
	{
		if(isset($_POST['code']) &&!empty($_POST['code']))
		{
			$code = htmlspecialchars($_POST['code']);
			$pdo = new PDO("mysql:host=;dbname=$dbname;charset=utf8",$login,$pass);
			$stmt2 = $pdo->prepare('SELECT id FROM recuperation WHERE mail = ? AND code = ?');
			$stmt2->execute(array($_SESSION['change_email'], $code));
			$stmt2 = $stmt2->rowCount();
			if($stmt2 == 1)
			{
				$stmt2_query_bis = $pdo->prepare('UPDATE recuperation SET confirmer = 1 WHERE mail = ?');
				$stmt2_query_bis->execute(array($_SESSION['change_email']));
				header('Location:index.php?section=changemdp');
			}

			else
			{
				$_SESSION['flashbagMsgErrors']['code']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le code saisie est invalide ! </div>';
			}
		}

		else
		{
			$_SESSION['flashbagMsgErrors']['code']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Veuillez saisir le code de vérification ! </div>';
		}
	}

	if($_GET['section'] == 'changemdp')
	{
		if(isset($_POST['change_password']) && isset($_POST['change_password_confirm']) && !empty($_POST['change_password']) && !empty($_POST['change_password_confirm']))
		{
			$pdo = new PDO("mysql:host=;dbname=$dbname;charset=utf8",$login,$pass);
			$verif = $pdo->prepare('SELECT confirmer FROM recuperation WHERE mail = ?');
			$verif->execute(array($_SESSION['change_email']));
			$verif = $verif->fetch();
			$verif = $verif['confirmer'];
			if($verif == 1)
			{
				$change_password = htmlspecialchars($_POST['change_password']);
				$change_password_confirm = htmlspecialchars($_POST['change_password_confirm']);
				if($change_password == $change_password_confirm)
				{
					$change_password = password_hash($_POST['change_password'],PASSWORD_BCRYPT);
					//$change_password_confirm = sha1($change_password_confirm);
					$pdo = new PDO("mysql:host=;dbname=$dbname;charset=utf8",$login,$pass);
					$stmt3 = $pdo->prepare('UPDATE users SET password = ? WHERE email = ?');
					$stmt3->execute(array($change_password, $_SESSION['change_email']));
					$stmt2_query = $pdo->prepare('DELETE FROM recuperation WHERE mail = ?');
					$stmt2_query->execute(array($_SESSION['change_email']));
					$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> Mot de passe modifié avec succès ! <br>
						Redirection vers la page de connexion dans 5 secondes ... </div>';
					header('Refresh:5;url=index.php?section=connect');
				}

				else
				{
					$_SESSION['flashbagMsgErrors']['change_password']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Les mots de passe ne correspondent pas ... </div>';
				}
			}

			else
			{
				$_SESSION['flashbagMsgErrors']['change_password']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Veuillez valider votre mail grâce au code de vérification qui vous a été envoyé ! </div>';
			}
		}

		else
		{
			$_SESSION['flashbagMsgErrors']['change_password']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Erreur ! Un ou plusieurs champ(s) manquant(s) ! </div>';
		}
	}
}

else
{
	if($_GET['section'] == 'changePassword')
	{
		$_SESSION['flashbagMsgErrors']['change_email']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Erreur ! Saisir l\'adresse e-mail ! </div>';
	}

	else
	{

	}
}

include_once('src/views/changePassword.php');