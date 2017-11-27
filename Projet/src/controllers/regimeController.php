<?php 
/*
Page: regimeController.php
*/

include_once('app/config/dbconnect.php');

if(session_status()===PHP_SESSION_NONE)
{
	session_start();
}

if(empty($_SESSION['uname']))
{
	header('Location: index.php?section=connect');
	echo "Merci de vous connecter pour accéder à cette page";
}

include_once('src/views/regime.php');