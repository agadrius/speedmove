<!DOCTYPE html>
<html>
<head>
  <title>Speed-move</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- header -->
<?php	include_once "includes/header.php"; ?>
<!-- navigation et menu -->
<?php	include_once "includes/nav.php"; ?>
<!-- section -->
<section>
	<!-- article -->
	<article>
		<?php
 
// Mettez ici votre adresse valide
$to = "speedmove@skynet.be";
 
// Sujet du message 
$suject = "demande de devis" ;
$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$adresse = $_POST['adresse'] ;
$tel= $_POST['telephone'] ;
$email = $_POST['email'] ;
$service = $_POST['service'] ;
$message = $_POST['message'] ;
// Corps du message, écrit en texte et encodage iso-8859-1

 $message_email = "Bonjour,\n un message vous a ete envoye depuis speed-move.be \n contact: " .$nom. " " .$prenom. "\n adresse :" .$adresse. "\n\n telephone : " .$tel. "\n email : " .$email. "\n type de service :" .$service. "\n voici son message : " .$message. "\n";
 
// Entêtes du message
$headers = ""; // on vide la variable
$headers = "From: " .$nom. " " .$prenom. " <" .$email. ">\n"; // ajout du champ From
// $headers = $headers."MIME-Version: 1.0\n"; // ajout du champ de version MIME
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
	<?php	include_once "includes/aside.php"; ?>
</section>
<!-- footer -->
<?php	include_once "includes/footer.php"; ?>
</body>
</html>
