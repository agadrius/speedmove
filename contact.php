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
			<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d765.400568894465!2d4.90047008403309!3d49.81444794641851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x802eea50caca5bc1!2sSpeed+Move!5e0!3m2!1sfr!2sbe!4v1490774102097" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
			<form class="col-md-offset-3 col-sm-offset-2 col-sm-8 col-md-6 " id="contact"  action="scripts/send_contact.php" method="post">
				<div class="form-group has-feedback" id="name">
					<label for="texte">votre nom et prénom(obligatoire) : </label>
					<input name="nom" type="text" class="form-control" id="imput_name">
					<span class="glyphicon glyphicon-remove form-control-feedback" style="display:none" id="logo_name"></span>
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
					<span class="glyphicon glyphicon-remove form-control-feedback" style="display:none" id="logo_mail"></span>
					<span class="help-block" style="display:none" id="error_mail">adresse mail non valide ex: test@test.com</span>	
				</div>
				<div class="form-group has-feedback"  id="message">
				  <label for="textarea">Votre message : </label>
				  <textarea name="message" type="textarea" class="form-control" id="imput_message"></textarea>
				  <span class="glyphicon glyphicon-remove form-control-feedback" style="display:none" id="logo_message"></span>
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
		var $name = $("#imput_name"),
			$name_div = $("#name"),
			$name_logo = $("#logo_name"),
			$name_error = $("#error_name"),
			$tel = $("#imput_tel"),
			$tel_div = $("#tel"),
			$tel_logo = $("#logo_tel"),
			$tel_error = $("#error_tel"),
			$mail = $("#imput_mail"),
			$mail_div = $("#mail"),
			$mail_logo = $("#logo_mail"),
			$mail_error = $("#error_mail"),
			$message = $("#imput_message"),
			$message_div = $("#message"),
			$message_logo = $("#logo_message"),
			$message_error = $("#error_message");
		$('#envoi').click(function(){
			
			var name = verifier($name, $name_div, $name_logo, $name_error);
			var tel = verifier($tel, $tel_div, $tel_logo, $tel_error);
			var mail = verifier($mail, $mail_div, $mail_logo, $mail_error);
			var message = verifier($message, $message_div, $message_logo, $message_error);
			return false; // bloque envoi
			if(tel ==false){
				return false;
			}
			else
			{
				return true;
			}
		});
		function verifier(imput, div, logo, error){
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
				return true;
			}
		}
	});

  </script>
  </body>
</html>