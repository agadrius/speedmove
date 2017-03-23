<!DOCTYPE html>
<html>
<head>
  <title>Speed-move</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- header -->

<!-- navigation et menu -->

<!-- section -->
<section>
	<!-- article -->
	<article>
		<?php
 
// Mettez ici votre adresse valide
$to = "lessire.florent@gmail.com";
 
// Sujet du message 
$suject = "demande de contact" ;
$nom = $_POST['nom'] ;
$tel= $_POST['telephone'] ;
$email = $_POST['email'] ;
$message = $_POST['message'] ;
// Corps du message, écrit en texte et encodage iso-8859-1

$message_email = "Bonjour,\n un message vous a ete envoye depuis speed-move.be \n\n\n information du contact : \n contact: " .$nom. "\n telephone : " .$tel. "\n email : " .$email. "\n\n voici son message : \n" .$message. "\n";
 
// Entêtes du message
$headers = ""; // on vide la variable
$headers = "From: " .$nom. " <" .$email. ">\n"; // ajout du champ From
$headers = $headers."MIME-Version: 1.0\n"; // ajout du champ de version MIME
$headers = $headers."Content-type: text/plain; charset=iso-8859-1\n"; // ajout du type d'encodage du corps
 
// Appel à la fonction mail
if ( mail($to, $suject, $message_email, $headers) == TRUE )
{
   echo "Envoi du mail reussi.";
}
else
{
   echo "Erreur : l'envoi du mail a échoué.";
}
 
?>
	</article>
	<!-- aside -->
</section>
<!-- footer -->

</body>
</html>