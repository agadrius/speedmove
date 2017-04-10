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
			<form class="col-md-offset-3 col-sm-offset-2 col-sm-8 col-md-6 " id="contact"  action="scripts/send_contact.php" method="post">
				<div class="form-group has-feedback" id="name">
					<label for="texte">votre nom et prénom(obligatoire) : </label>
					<input name="nom" type="text" class="form-control" id="imput_name">
					<span class="glyphicon form-control-feedback" style="display:none" id="logo_name"></span>
					<span class="help-block " style="display:none" id="error_name" id="error_name">nom et prenom obligatoire</span>	
				</div>
				<div class="form-group has-feedback" id="tel">
					<label for="texte">votre téléphone(obligatoire) : </label>
					<input name="telephone" type="text" class="form-control" id="imput_tel">
					<span class="glyphicon form-control-feedback" style="display:none" id="logo_tel"></span>
					<span class="help-block" style="display:none" id="error_tel">numero de telephone obligatoire</span>	
				</div>
				<div class="form-group has-feedback" id="mail">
					<label for="texte">votre e-mail(obligatoire) : </label>
					<input name="email" type="text" class="form-control" id="imput_mail">
					<span class="glyphicon form-control-feedback" style="display:none" id="logo_mail"></span>
					<span class="help-block" style="display:none" id="error_mail">adresse mail non valide ex: test@test.com</span>	
				</div>
				<div class="form-group has-feedback" id="service">
					<label for="select">services (obligatoire) : </label>
					<select name="service"  class="form-control">
						<option>Taxi</option>
						<option>Livraison de colis</option>
						<option>Navette aéroport</option>
						<option>Navette gare</option>
						<option>Autres</option>
					</select>
				</div>
				<div class="form-group has-feedback"  id="message">
				  <label for="textarea">Votre message : </label>
				  <textarea name="message" type="textarea" class="form-control" id="imput_message"></textarea>
				  <span class="glyphicon form-control-feedback" style="display:none" id="logo_message"></span>
				  <span class="help-block" style="display:none" id="error_message">votre message est obligatoire</span>
				  
				</div>
				<button type="reset" class="btn btn-danger">Annuler</button>
				<input type="submit" class="btn btn-primary" value="Envoyer" id="envoi">
			</form>
		</section>
	</div>
		<!-- footer -->
		<?php include 'include/footer.php';?><!-- footer includes -->		
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		
		$('#envoi').click(function(){
		
			// test champ vide
			var name = verifier($("#imput_name"), $("#name"), $("#logo_name"), $("#error_name"));
			var tel = verifier($("#imput_tel"), $("#tel"), $("#logo_tel"), $("#error_tel"));
			var mail = testMail($("#imput_mail").val());
			var message = verifier($("#imput_message"), $("#message"), $("#logo_message"), $("#error_message"));
			
			//condition envoi mail
			if(name==true && tel==true && mail==true&& message==true){
				return true;
			}
			else
			{
				return false;
			}
		});
		
		// fonction test champ vide
		function verifier(imput, div, logo, error){
			div.removeClass().addClass("form-group has-feedback"); // reset de la class div 
			logo.removeClass().addClass("glyphicon form-control-feedback"); // reset de la class logo
			if(imput.val() == ""){
				div.addClass("has-error");
				logo.addClass("glyphicon-remove");
				logo.show();
				error.show();
				return false;
			}
			else{
				div.addClass("has-success");
				logo.addClass("glyphicon-ok");
				logo.show();
				error.hide();
				return true;
			}
		}

		function testMail(champ){ 
			$("#mail").removeClass().addClass("form-group has-feedback"); // reset de la class div 
			$("#logo_mail").removeClass().addClass("glyphicon form-control-feedback"); // reset de la class logo
			var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(regex.test(champ)==false){
				$("#mail").addClass("has-error");
				$("#logo_mail").addClass("glyphicon-remove");
				$("#logo_mail").show();
				$("#error_mail").show();
				return false;
			}
			else{
				$("#mail").addClass("has-success");
				$("#logo_mail").addClass("glyphicon-ok");
				$("#logo_mail").show();
				$("#error_mail").hide();
				return true;
			}
		}
	});

  </script>
  </body>
</html>