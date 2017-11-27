<?php 

include_once('app/config/dbconnect.php');

function getPassword($l)
{
	try
	{
		global $host;
		global $dbname;
		global $login;
		global $pass;
		$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
		$stmt = $pdo->prepare('SELECT password FROM users WHERE login=?');
		$stmt->execute(array($l));
		$res=$stmt->fetch();
		return $res['password'];
	}

	catch(Exception $e)
	{
		die("Erreur interne : ".$e);
	}
}