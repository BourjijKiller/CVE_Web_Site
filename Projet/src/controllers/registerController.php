<?php

include_once('app/config/dbconnect.php');
include_once('src/models/issetLogin.php');
include_once('src/models/issetEmail.php');

if(session_status()===PHP_SESSION_NONE)
{
	session_start();
}

if(empty($_SESSION['captcha']))
{
	header('Location: index.php?section=captcha');
}


if(isset($_POST) && !empty($_POST))
{
	$isValid=true;
	if(!empty($_POST['identifiant']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['datedn'])&& !empty($_POST['adresse'])&& !empty($_POST['codepost']) && !empty($_POST['ville']) && !empty($_POST['password']) && !empty($_POST['telephone']) && !empty($_POST['password_confirm']))
	{
		if(issetLogin($_POST['identifiant']))
		{
			$_SESSION['flashbagMsgErrors']['login']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le nom d\'utilisateur <strong>'.$_POST['identifiant'].'</strong> existe déjà ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[a-zA-Z0-9]+$/',$_POST['identifiant'])==0)
		{
			$_SESSION['flashbagMsgErrors']['login']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le nom d\'utilisateur est invalide ! </div>';
			$isValid=false;
		}
		if(issetEmail($_POST['email']))
		{
			$_SESSION['flashbagMsgErrors']['email']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> L\'adresse email est déjà utilisée ! </div>';
			$isValid=false;
		}
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['flashbagMsgErrors']['email']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> L\'adresse email spécifiée est invalide ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[a-zA-Zéèëï]+$/',$_POST['nom'])==0)
		{
			$_SESSION['flashbagMsgErrors']['nom']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le nom ne doit contenir que des lettres ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[a-zA-Zéèëï]+$/',$_POST['prenom'])==0)
		{
			$_SESSION['flashbagMsgErrors']['prenom']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le prénom ne doit contenir que des lettres ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[a-zA-Z0-9éèëïù ,]+$/',$_POST['adresse'])==0)
		{
			$_SESSION['flashbagMsgErrors']['adresse']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> L\'adresse postale ne doit contenir que des chiffres et des lettres ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[0-9]+$/',$_POST['codepost'])==0)
		{
			$_SESSION['flashbagMsgErrors']['codepost']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le code postal ne doit contenir que des chiffres ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[a-zA-Zéèêëàâîïôöûü -]+$/',$_POST['ville'])==0)
		{
			$_SESSION['flashbagMsgErrors']['ville']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> La ville ne doit contenir que les caractères : [a-zA-Zéèêëàâîïôöûü- ] ! </div>';
			$isValid=false;
		}
		if(preg_match('/^[0-9+]+$/',$_POST['telephone'])==0)
		{
			$_SESSION['flashbagMsgErrors']['telephone']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Le numéro de téléphone ne doit contenir que des chiffres ! </div>';
			$isValid=false;
		}
		if($_POST['password']!=$_POST['password_confirm'])
		{
			$_SESSION['flashbagMsgErrors']['password']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Les mots de passe ne correspondent pas ! </div>';
			$isValid=false;
		}

		if($isValid)
		{
			try
			{
				$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pass);
				$stmt = $pdo->prepare('INSERT INTO users (login,nom,prenom,email,datedn,password,telephone,adresse,codepost,ville) VALUES (?,?,?,?,?,?,?,?,?,?)');
				$params=array(
					$_POST['identifiant'],
					$_POST['nom'],
					$_POST['prenom'],
					$_POST['email'],
					$_POST['datedn'],
					password_hash($_POST['password'],PASSWORD_BCRYPT),
					$_POST['telephone'],
					$_POST['adresse'],
					$_POST['codepost'],
					$_POST['ville'],
				);
				$stmt->execute($params);
				$pdo = null;
				$_SESSION['flashbagMsgSuccess']='<div style="color:green;font-weight:bold;"><span class="glyphicon glyphicon-ok"></span> Utilisateur <strong>'.$_POST['identifiant'].'</strong> enregistré avec succès ! <br>
					Redirection vers la page de connexion ... </div>';
				header("refresh:3;url=index.php?section=connect");
			}

			catch(Exception $e)
			{
				$_SESSION['flashbagMsgErrors']['database']="Erreur de connexion à la base de donnée : ".$e;
				$_SESSION['flashbagMsgErrors']['identifiant']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Utilisateur <strong>'.$_POST['identifiant'].'</strong> non enregistré(e) ! Erreur de connection </div>';
				include('src/views/errors/registerError.php');
			}
		}
	}

	else
	{
		$_SESSION['flashbagMsgErrors']['missingField']='<div style="color:red;font-weight:bold;"><span class="glyphicon glyphicon-remove"></span> Erreur : Un ou plusieurs champs manquant(s) </div>';
	}
}

include_once('src/views/register.php');