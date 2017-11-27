<?php 

include_once('app/config/dbconnect.php');

function issetLogin($l)
{
	try
	{
		global $host;
		global $dbname;
		global $login;
		global $pass;
		$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
		$stmt = $pdo->prepare('SELECT id,login FROM users WHERE login=?');
		$stmt->execute(array($l));
		$pdo=null;
		return empty($stmt->fetch())?false:true;
	}

	catch(Exception $e)
	{
		
	}
}