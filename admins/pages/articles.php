<?php 
session_start();
require '../config.php';
$Errors=array();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>articles</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<style>
</style>
<?php
echo '<link rel="stylesheet"type="text/css"href="../css/index.css">';
?>
</head>
<!-- FIN DU HEAD -->
<body class="w3-content "style="max-width:100%;">
<?php require '../../views/elements/header.php';?>
<?php require '../../views/moduls/logs.php';?>
<?php require '../../views/moduls/register.php';?>
<div style="max-width:1060px;margin:auto;">
<!-- FIL D'ARIANE -->
<h1 class="w3-border-bottom w3-border-black w3-animate-right w3-allerta w3-padding-bottom w3-border-bottom w3-margin-bottom"
style="font-size:25px;max-width:1060px;margin:auto;margin-top:50px!important;"><b>Les articles </b><small> / </small></h1>
<p class='w3-text-blue'> <?=$_SESSION['loggedAdminPseudo']?> est connecté</p>


<div class="w3-row">
 <div class="w3-col s12"style="overflow-x:auto;">
 <!-- INCLUDE USERS SQL -->
<?php require '/../sql/articles.php'; ?>
</div><!-- RESPONSIVE CLASS -->
</div><!-- ROW -->
</div>

<div class="w3-clear"></div>
<!--moduls -->
<?php require '../../views/moduls/contactme.php';?>
<?php require '../../views/moduls/button_top.php';?>
<?php require '../../views/elements/footer.php';?>
<script>
//menu onglet assoc
function dropAssociation() {
    var x = document.getElementById("associationId");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
//menu onglet logs
function openlogs() {
    var x = document.getElementById("logins");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    }else {
        x.className = x.className.replace(" w3-show", "");
	}
}
//menu onglet register
function openregister() {
    var x = document.getElementById("Idregister");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
   } else  {
        x.className = x.className.replace(" w3-show", "");
	}
}
//menu onglet Mon compte
function monCompte(){
	
	    var x = document.getElementById("compteId");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
   } else  {
        x.className = x.className.replace(" w3-show", "");
	}
}
</script>
<!-- FIN SCRIPTS JS -->
<!-- MODULES -->
<script src="../../js/navbar_fixed.js"></script>
<script src="../../js/dropcontact.js"></script>
</body>
</html>