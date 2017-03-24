<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Speed-Move, taxi de la semois</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- lib icone-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- bootstrap core css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- custome template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<?php include 'include/header.php';?><!-- header includes -->
		<!-- navigation -->
		<?php include 'include/menu.php';?><!-- menu includes -->

		<!-- corps de la page -->
		<section class="row" id="map">
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d643.6211982254531!2d4.900266827342728!3d49.81455294086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea7395b85972e5%3A0x802eea50caca5bc1!2sSpeed+Move!5e0!3m2!1sfr!2sbe!4v1490133432197" width="1200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
			<form class="col-md-offset-3 col-sm-offset-2 col-sm-8 col-md-6 " id="contact" action="scripts/send_contact.php" method="post">
				<div class="form-group">
					<label for="texte">votre nom(obligatoire) : </label>
					<input name="nom" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="texte">votre téléphone(obligatoire) : </label>
					<input name="telephone" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="texte">votre e-mail(obligatoire) : </label>
					<input name="email" type="text" class="form-control">
				</div>
				<div class="form-group">
				  <label for="textarea">Votre message : </label>
				  <textarea name="message" type="textarea" class="form-control"></textarea>
				</div>
				<button type="button" class="btn btn-danger">Annuler</button>
				<input type="submit" class="btn btn-primary" value="Envoyer">
			</form>
		</section>
	</div>
		<!-- footer -->
		<?php include 'include/footer.php';?><!-- footer includes -->		
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>