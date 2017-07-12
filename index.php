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
	<?php include_once("analyticstracking.php") ?>
	<div class="container">
		<?php include 'include/header.php';?><!-- header includes -->
		<!-- navigation -->
		<?php include 'include/menu.php';?><!-- menu includes -->
		<!-- slider -->
		<?php include 'include/slider.php';?><!-- slider includes -->
		<!-- corps de la page -->
			<section class="row" id="services"><!-- services -->
				<h2>Nos services</h2>
				<div class="col-sm-6 col-md-4" id="service_taxi">
					<a href="service-taxi.php"><img src="images/taxi-mini.jpg" alt="service taxi">
					<h3>Service de taxi</h3>
					<p>Plus d'informations</p></a>
				</div>
				<div class="col-sm-6 col-md-4" id="service_navette">
					<a href="service-navette.php"><img src="images/taxi-mini.jpg" alt="service navette">
					<h3>Navette Aéroport et Gares</h3>
					<p>Plus d'informations</p></a>
				</div>
				<div class="col-sm-6 col-md-4" id="service_livraison">
					<a href="service-livraison.php"><img src="images/colis-min.jpg" alt="service livraison">
					<h3>Livrasion de colis</h3>
					<p>Plus d'informations</p></a>
				</div>
			</section>
			<section class="row" id="contact"><!-- contact -->
				<div class="col-md-12">
					<h2>Comment nous contacter ?</h2>
					<p>Vous pouvez nous contacter au <a href="tel:0032471515665"><strong>+32(0)471/51.56.65</strong></a>, via notre formulaire de demande de <a href="#"><em>devis</em></a> ou de <a href="#"><em>contact</em></a>.</p>
				</div>
			</section>
			<section class="row" id="joint_us"><!-- nous rejoindre -->
				<div class="col-md-12">
					<h2>Nous Rejoindre</h2>
					<div class="row">
						<div class="col-md-12">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fspeedmovetaxi%2F%3Ffref%3Dts&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</di>
				</div>
			</section>
	</div>
		<!-- footer -->
		<?php include 'include/footer.php';?><!-- footer includes -->		
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="//connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;version=v2.5"></script>
	<script>
  $(function () {
    $('.carousel').carousel({ interval: 2000 });
    $('#previous').click(function() { $('.carousel').carousel('prev'); }); 
    $('#next').click(function() { $('.carousel').carousel('next'); });
  });
</script>
  </body>
</html>