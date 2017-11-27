<?php 
/*
Page: captchaController.php
*/

if(session_status() === PHP_SESSION_NONE)
{
	session_start();
}


$_SESSION['captcha'] = mt_rand(1000,9999);
$image = imagecreate(100, 30);
$font = 'fonts/Player_One.ttf';

$bg = imagecolorallocate($image, 255, 255, 255);
$textcolor = imagecolorallocate($image, 255, 0, 0);

imagettftext($image, 28, 0, 13, 30, $textcolor, $font, $_SESSION['captcha']);
header('Content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);

?>