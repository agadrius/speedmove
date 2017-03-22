<!DOCTYPE html>
<html>
<head>
	<title>Devis taxi Vresse-sur-Semois, bouillon, Bertrix, Libramont, Gedinne, Bievre, Graide. Speed-move : devis.</title>
	<link rel="stylesheet" href="style.css" />
	<meta name="description" content="Speed-move vous présente ses services de devis. />
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
		<h1> Demande de devis</h1>
		<form action="send_email_devis.php" method="post">
		<PRE>
<H2>Informations personnelles: </H2>
       Nom: <input type="text" name="nom" size=30>
    Prénom: <input type="text" name="prenom" size=30>
   Adresse: <input type="text" name="adresse" size=30>
 Téléphone: <input type="text" name="telephone" size=30>
     email: <input type="text" name="email" size=30>
<H2>Type de services: </H2>
<input type="radio" name ="service" value="personne"> Transport de personne
<input type="radio" name ="service" value="colis"> Transport de colis
<input type="radio" name ="service" value="navette"> Navette
<input type="radio" name ="service" value="location"> location
<H2>Informations complémentaires: </H2>
Message: <textarea name="message" rows="8" cols="50"></textarea>
         <INPUT TYPE=SUBMIT VALUE=Envoyer>
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