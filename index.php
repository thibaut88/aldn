<?php
session_start();
$WEBROOT =  str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
$titre=explode('/',$_GET['p']);
$titlePage=(isset($titre[1]))?$titre[1]:'index';
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
        <!-- Template CSS -->
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?=$WEBROOT?>assets/css/bootstrap.css" rel="stylesheet">
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
		<!-- JQuery -->
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script> 
		<!--MES SCRIPTS && CSS->
		<!-- NAVBAR FIXED JQUERY -->
		<!--<script src="js/navbar_fixed.js" type='text/javascript'></script>-->
		<!-- Mes animations CSS -->
		<link href="<?=$WEBROOT?>css/animate.css" rel="stylesheet" type="text/css">
		<link href="<?=$WEBROOT?>css/animate2.css" rel="stylesheet" type="text/css">
		<link href="<?=$WEBROOT?>css/animations.css" rel="stylesheet" type="text/css">
		<link href="<?=$WEBROOT?>css/index.css" rel="stylesheet" type="text/css">
</head><!-- End Head -->
<body><!-- Start body -->

			<?php
				// Add Config + Btn Ht Page
			include('config.php');
			include('views/moduls/button_top.php');
			?>
						
            <!-- Javascript Template-->
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
			

</body><!-- End body -->
</html><!-- End page -->
