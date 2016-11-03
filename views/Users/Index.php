<?php
// Si nouvel utilisateur est ajouté : AFFICHER ALERTE
if ($alertAddUser){
?>
<div class="container">
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Vous êtes bien enregistré !!</strong>
</div>
</div>
<?php
} 
// Si erreur d'enregistrement du nouvel utilisateur : AFFICHER ALERTE
if ($alertErrorRegister){
?>
<div class="container">
<div class="alert alert-warning">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Problème lors de l'enregistrement !!</strong>
</div>
</div>
<?php
} 
// Affichage du profil de l'utilisateur 
// SI l'utilisateur est bien connecté: AFFICHER SON PROFIL 
 if($displayUserProfil){
	include 'models/userProfil.php';
	include 'models/userPanier.php';
?>
<div id="content-profil">
<?php require "views/elements/content_profil.php"; ?>
</div>
<?php
}else { // Sinon : afficher une alert 'error'
?>
<div class="container">
<div class="alert alert-default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Vous n'êtes pas connecté !!</strong>
</div>
</div>
<?php } ?>






<!-- SCRIPTS DU PROFIL -->
<script type="text/javascript">

	//HIDDEN FORMULAIRES MODIFICATION DU PROFIL  
	$("div#content_infos_user form").hide();
	 function show_modify(elem){
	$("div#content_infos_user #"+elem+"").toggle();
		}
	//SPINNER POUR LES MODIF
	$("div#content-profil i").on({
		mouseenter: function(){
		$(this).addClass("w3-spin");
		}, 
		mouseleave: function(){
		$(this).removeClass("w3-spin");
		}
	});
	//ONGLETS DE PROFIL
	function openUserInfos(evt, element) {
		
	  var i, x, tablinks;
	  x = document.getElementsByClassName("infoscompte");
		//onglets de navigation
	  tablinks = document.getElementsByClassName("tablink");

	  
	  for (i = 0; i < x.length; i++) {
		//On recup all  divs content infoscompte et les cache
		 x[i].style.display = "none";
	  }
	  
	  for (i = 0; i < x.length; i++) {
		 tablinks[i].className = tablinks[i].className.replace(" w3-sand", "");
		 tablinks[i].className = tablinks[i].className.replace(" w3-card-4", "");
		 tablinks[i].className = tablinks[i].className.replace(" w3-leftbar", "");
		 tablinks[i].className = tablinks[i].className.replace(" w3-rightbar", "");
	  }
	  //On change dynamiquement le titre du content
	  document.getElementById('titleinfoscompte').innerHTML= evt.currentTarget.text;
	  //On affiche le contenu demandé
	  document.getElementById(element).style.display = "block";
	  document.getElementById(element).className += " w3-leftbar w3-border-black";
	  evt.currentTarget.className += " w3-sand";
	  evt.currentTarget.className += " w3-card-4";
	  evt.currentTarget.className += " w3-leftbar w3-border-black";
	  evt.currentTarget.className += " w3-rightbar";
	  evt.currentTarget.style.transition += " border 0.4s, background 0.2s";
	}
</script>