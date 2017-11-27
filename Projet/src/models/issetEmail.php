<?php 

include_once('app/config/dbconnect.php');

function issetEmail($mail)
{
	try
	{
		global $host;
		global $dbname;
		global $login;
		global $pass;
		$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
		$stmt = $pdo->prepare('SELECT id,login FROM users WHERE email=?');
		$stmt->execute(array($mail));
		$pdo=null;
		return empty($stmt->fetch())?false:true;
	}

	catch(Exception $e)
	{
		
	}
}