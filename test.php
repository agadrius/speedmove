<?php
$mail = 'lessire.florent@gmail.com'; // D�claration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}

//=====donn�es du formulaire
$message_form = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut augue eros, iaculis nec rhoncus vitae, ornare ut ipsum. Nam ac felis sit amet dui suscipit auctor. Suspendisse semper leo ut nunc efficitur, cursus porttitor nisl semper. Aliquam risus odio, imperdiet et lectus id, sollicitudin faucibus lectus. Sed at leo sem.";
$name_form = "toto";
$tel_form = "05645645646";
$mail_form = "test@test.com";
//==========

//=====D�claration des messages au format texte et au format HTML.

$message_html = "<html><head></head><body><b>informations client :</b><br><br>nom : " .$name_form. "<br>tel : " .$tel_form. "<br> email : " .$mail_form. "<br><br><b>message :</b><br><br> " .$message_form. "<br><br><br><br> voici un e-mail envoy� via <i>speed-move.be</i>.</body></html>";
//==========
 
//=====Cr�ation de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====D�finition du sujet.
$sujet = "Demande de contact";
//=========
 
//=====Cr�ation du header de l'e-mail.
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
mail($mail,$sujet,$message,$header);
//==========
?>
