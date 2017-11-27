<?php


if(session_status() === PHP_SESSION_NONE) //Pour vérifier la valeur et le type
{
	session_start();
}

unset($_SESSION['captcha']);

include_once('src/views/home.php');