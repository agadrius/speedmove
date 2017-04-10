<?php
$mail = 'lessire.florent@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}

//=====données du formulaire
$name_form = $_POST['nom'];
$tel_form = $_POST['telephone'];
$mail_form = $_POST['email'];
$message_form = $_POST['message'];
date_default_timezone_set('Europe/Paris'); //date fr
$date = date("d-m-Y");
$heure = date("H:i");
//==========

//=====Déclaration des messages au format texte et au format HTML.

$message_html = "<html>
					<head>
					</head>
					<body>
						<b>informations client :</b><br>
						<b>---------------------------------------------------------------</b><br>
						de: " .$name_form. "<br>
						date : le " .$date. " à " .$heure."<br>
						tel : " .$tel_form. "<br>
						email : " .$mail_form. "<br>
						<br>
						<br>
						<br>
						<b>message :</b><br>
						<b>---------------------------------------------------------------</b><br>
						" .$message_form. "<br>
						<br>
						<br>
						<br> 
						voici un e-mail envoyé via <i>speed-move.be</i>.
					</body>
				</html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Demande de contact";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"" .$name_form. "\"<" .$mail_form. ">".$passage_ligne;
$header.= "Reply-to: \"" .$name_form. "\" <" .$mail_form. ">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 

$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
if ( mail($mail,$sujet,$message,$header) == TRUE )
{
   header('Location: ../send_contact_ok.php');   // redirection contact ok
}
else
{
   header('Location: ../send_contact_fail.php'); // redirection contact fail
}
//==========
?>