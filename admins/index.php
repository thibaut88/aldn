<?php
session_start();
require 'config.php';
$Errors=array();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ALDN Administration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<!-- INCLUDES CONFIG -->
<style>
html,body,h1,h2,h3,h4,h5 { font-family: "Raleway", sans-serif}
</style>
<?php
echo '<link rel="stylesheet"type="text/css"href="../css/index.css">';
?>
</head>
<!-- FIN DU HEAD -->
<body class="w3-content "style="max-width:100%;">
<?php require '../views/elements/header.php';?>
<?php require '../views/moduls/logs.php';?>
<?php require '../views/moduls/register.php';?>

<div style="max-width:1060px;margin:auto;">
<!-- FIL D'ARIANE -->
<h1 class="w3-border-bottom w3-border-black   w3-animate-right w3-allerta w3-padding-bottom w3-border-bottom w3-margin-bottom"
style="font-size:25px;max-width:1060px;margin:auto;margin-top:50px!important;"><b>Espace administration </b><small> / </small></h1>

<?php
function securise($var)
{ 
	$var = stripslashes($var); 
	$var = htmlentities($var); 
	$var = strip_tags($var); 
	return $var;
}
if(isset($_POST['login']) && $_GET['logs']==="send"){
	$pseudo = (isset($_POST['pseudo']))? $_POST['pseudo'] : "";
	$pwd = (isset($_POST['password'])) ? $_POST['password'] : "";
	$Errors['pseudo'] = (empty($pseudo))? "il faut préciser un pseudo valide" : false;
	$Errors['pwd'] = (empty($pwd))? "il faut préciser un mot de passe valide" : false;
	if(!empty($pwd) && !empty($pseudo)){
		$pseudo = securise($pseudo);
		$pwd = securise($pwd);
	}
require ('log_admin.php');
}
?>

<?php if(!isset($_SESSION['loggedAdmin']) && !isset($_SESSION['loggedAdminPseudo'])){ ?>
	<form  class="w3-form w3-card-4 w3-border w3-border-teal" action="index.php?logs=send" method="post"
style="width:360px;margin:auto;margin-top:100px;margin-bottom:100px;">
<label class="w3-xlarge">Administrateur :</label><br>
<input class="w3-input"type="text" name="pseudo"placeholder=""value=""><br>
<label class="w3-xlarge">Mot de passe :</label><br>
<input class="w3-input"type="password" name="password"placeholder=""value=""><br>
<input class="w3-btn w3-teal w3-large"type="submit"name="login"value="connection">
</form>
<?php }else{ ?>
<p class='w3-text-blue'> <?=$_SESSION['loggedAdminPseudo']?> est connecté</p>
	<p><a href="pages/blog.php"title="gérer le blog<">Gérer le blog</a></p>
	<p><a href="pages/tutorial.php"title="gérer les tutoriaux">Gérer les tutoriels</a></p>
	<p><a href="pages/actes_request.php"title="gérer mes actes">Gérer les actes rédigés</a></p>
	<?php
	require 'content_admin.php';
	?>
<?php }  
?>
</div>

<div class="w3-clear"></div>
<!--moduls -->
<?php require '../views/moduls/contactme.php';?>
<?php require '../views/moduls/button_top.php';?>
<?php require '../views/elements/footer.php';?>
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
<script src="../js/navbar_fixed.js"></script>
<script src="../js/dropcontact.js"></script>
</body><!--fin w3-content content-body-->
</html>