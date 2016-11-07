<?php
$WEBROOT =  str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
session_start();
$titlePage="defaut";
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="fr" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="fr" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
    <!--<![endif]-->
    <head>
        <!-- Title -->
		<title><?=$titlePage?></title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="site association lorraine pour le développement du numérique">
        <meta name="author" content="Pinot Bernard">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon  -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?=$WEBROOT?>assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?=$WEBROOT?>assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=$WEBROOT?>assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=$WEBROOT?>assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=$WEBROOT?>assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?=$WEBROOT?>assets/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<!-- INCLURE LES SCRIPTS ET CSS DYNAMIQUEMENT -->
		<link href="<?php 
		//str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'css/index.css'?>"rel="stylesheet"type="text/css">
		<link href="<?php 
		//str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'css/animations.css'?>"rel="stylesheet"type="text/css">
		<?php
		//echo "<script src='".str_replace('index.php','',$_SERVER['SCRIPT_NAME'])."js/dropcontact.js'type='text/javascript'></scrip"; 
		//echo "<script src='".str_replace('index.php','',$_SERVER['SCRIPT_NAME'])."js/navbar_fixed.js'type='text/javascript'></script>"; 
		?>
		<!-- JQuery -->
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script> 
		
  </head>
    <body>
						<!-- CONFIG -->
						<?php
						include('config.php');
						include('views/moduls/button_top.php');
						
						?>
						
            <!-- JS -->
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="<?=$WEBROOT?>assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="<?=$WEBROOT?>assets/js/modernizr.custom.js" type="text/javascript"></script>
			

	<script type="text/javascript">
		//TOGGLE ONGLET EMPLOI
		function dropEmploi() {
			var x = document.getElementById("contentEmploi");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		//TOGGLE ONGLET IMMOBILIER
		function dropIMMO() {
			var x = document.getElementById("immobilier");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		//TOGGLE ONGLET REDIGER UN ACTE
		function dropRegiderUnActe() {
			var x = document.getElementById("RedigerUnActe");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		//TOGGLE ONGLET ASSOCIATION
		function dropAssociation() {
			var x = document.getElementById("associationId");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		//TOGGLE ONGLET MON COMPTE
		function monCompte(){
				var x = document.getElementById("compteId");
			if (x.className.indexOf("w3-show") == -1) { 
				x.className += " w3-show";
		   } else  {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		//TOGGLE MODULS CONNECTION

		function openlogs() {
			var x = document.getElementById("logins");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			}else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		//TOGGLE MODULS INSCRIPTION
		function openregister() {
			var x = document.getElementById("Idregister");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
		   } else  {
				x.className = x.className.replace(" w3-show", "");
			}
		}
	</script><!-- JAVASCRIPT -->	
	
<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->