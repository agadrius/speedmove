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
		<section class="row">
			<form class="col-md-offset-3 col-sm-offset-2 col-sm-8 col-md-6">
				<div class="form-group">
					<label for="texte">votre nom(obligatoire) : </label>
					<input id="text" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="texte">votre téléphone(obligatoire) : </label>
					<input id="text" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="texte">votre e-mail(obligatoire) : </label>
					<input id="text" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="select">services (obligatoire) : </label>
					<select id="select" class="form-control">
						<option>Taxi</option>
						<option>Livraison de colis</option>
						<option>Navette aéroport</option>
						<option>Navette gare</option>
						<option>Autres</option>
					</select>
				</div>
				<div class="form-group">
				  <label for="textarea">Votre message : </label>
				  <textarea id="textarea" type="textarea" class="form-control"></textarea>
				</div>
				<button type="button" class="btn btn-primary">Envoyer</button>
				<button type="button" class="btn btn-danger">Annuler</button>
			</form>
		</section>
	</div>
		<!-- footer -->
		<?php include 'include/footer.php';?><!-- footer includes -->		
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>