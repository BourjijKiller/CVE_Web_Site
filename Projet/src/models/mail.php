<?php

if(!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $recup_mail)) // On filtre les serveurs qui présentent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}

//=====Déclaration des messages au format texte et au format HTML.
$message_html = '
			<html>
				<head>
					<meta charset="utf-8"/>
				</head>
				<body>
					<font color="#303030";>
						<div align="center">
							<h1>
								Récupération de mot de passe - Cercle de voile d\'Épinal
							</h1>
							<div align="center">Bonjour <b style="color:green;">'.$recup_mail.'</b>,</div><br>
							<p>
								Voici votre code de récupération: <b style="color:green;">'.$recup_code.'</b>
							</p><br><br>
							<p>
								A bientôt sur le Cercle de voile d\'Épinal !
							</p>
							<br><br>
							<p style="color:red;font-weight:bold;">
								<span class="glyphicon glyphicon-warning-sign"></span> Ceci est un email automatique, merci de ne pas y répondre
							</p>
						</div>
					</font>
				</body>
			</html>
			';
//==========
 
//=====Lecture et mise en forme de la pièce jointe.
$fichier = fopen(__DIR__."/logo.png", "r");
$attachement = fread($fichier, filesize(__DIR__."/logo.png"));
$attachement = chunk_split(base64_encode($attachement));
fclose($fichier);
//==========
 
//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Reinitialisation de mot de passe";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"Support CVE\"<noreply-support@cve.com>".$passage_ligne;
$header.= "Reply-to: \"Support CVE\" <noreply-support@cve.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
 
//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"utf-8\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
 
//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========
 
 
 
$message.= $passage_ligne."--".$boundary.$passage_ligne;
 
//=====Ajout de la pièce jointe.
$message.= "Content-Type: logo/png; name=\"logo.png\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
$message.= "Content-Disposition: attachment; filename=\"image.jpg\"".$passage_ligne;
$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 
//========== 