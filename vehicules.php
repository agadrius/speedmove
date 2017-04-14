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

		<!-- corps de la page -->
		<section class="row" id="vehicules">
			<h1>Nos véhicules</h1>
			<div class ="col-md-12" id="multivan">
				<h2>Multivan</h2>
				<div class="row">
					<img src="images/service-taxi1-md.jpg" alt="multivan_1" class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/mulitvan3-md.jpg" alt="multivan_2" class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/multivan4-md.jpg" alt="multivan_3" class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/multivan5-md.jpg" alt="multivan_4" class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/multivan6-md.jpg" alt="multivan_5" class="col-xs-12 col-sm-6 col-md-4">
				</div>
			</div>
			<div class ="col-md-12" id="remorque">
				<h2>Remorque</h2>
				<div class="row">
					<img src="images/remorque1-md.jpg" alt="remorque_1" class="col-xs-12 col-sm-6 col-md-4">
					<img src="images/multivanetremorque.jpg" alt="remorque_2" class="col-xs-12 col-sm-6 col-md-4">
				</div>
			</div>
		</section>
	</div>
		<!-- footer -->
		<?php include 'include/footer.php';?><!-- footer includes -->		
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>