<!DOCTYPE html>
<html>
<head>
	<title>Contact taxi Vresse-sur-Semois, bouillon, Bertrix, Libramont, Gedinne, Bievre, Graide. Speed-move : contact.</title>
	<link rel="stylesheet" href="style.css" />
	<meta name="description" content="Speed-move vous présente ses services de contact. />
	<meta name="language" content="fr" />
	<meta name="Geography" content="Sugny, BE, 5550" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		<h1> Contact</h1>
		<form action="send_email_contact.php" method="post">
<PRE>
       Nom: <input type="text" name="nom" size=30>
    Prénom: <input type="text" name="prenom" size=30>
 Téléphone: <input type="text" name="telephone" size=30>
     email: <input type="text" name="email" size=30>
     sujet: <input type="text" name="suject" size=30>
   Message: <textarea name="message" rows="8" cols="50"></textarea>
            <input type="submit" value="Envoyer le mail">
</PRE>
</FORM>
	</article>
	<!-- bloc_info -->
	<?php	include_once "includes/bloc_info.php"; ?>
</section>
<!-- footer -->
<?php	include_once "includes/footer.php"; ?>
</body>
</html>