<div class="container">


<!-- ALERTE OFFRE AJOUTEE -->
<?php
if($displayAlerte=="AddOfferIsOk"){ ?>
<div class=""style="max-width:1060px;">L'offre a été ajoutée
<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p>
</div>
<?php } ?>
<!-- ALERTE ERREUR D'AJOUT -->

<?php
if($displayAlerte=="addOfferIsFalse"){ ?>
<div class=""style="max-width:1060px;">Erreur lors de l'ajout de l'offre
<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p>
</div>
<?php } ?>	

					<!-- ICI FILTRER SI ANNONCEUR EST 
					EMPLOYEUR OU A LA RECHERCHER D'EMPLOI -->
					<div id="filterDeposerOffre" class="background-black"
							style="width:80%;
							margin-top:20px;
							margin-bottom:100px;
							height:0 auto;">
						<center>
						<span  style="position:relative;">
						<h1>Vous êtes ?</h1>
						<button  class="btn"onclick="showDeposerForm()"
										style="width:200px;
										position:absolute;
										top:0px;
										left:0px;
										right:0px;">
						Un Demandeur d'emploi</button>
						
						<button class="btn" onclick="showEmployeur()"
										style="width:200px;
										position:absolute;
										top:30px;
										left:0px;
										right:0px;">
						Un employeur</button>
						</span>
						</center>
					</div>

</div>


<div id="DepotAnnonceForm" class="container" style="margin-top:0px;">
<div class="row background-white">
<h1 class=" w3-allerta  w3-margin-0 w3-margin-bottom w3-black w3-xlarge w3-padding-left">Votre annonce</h1>

<form action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_deposer_form_offer.php';?>" method="post">


<div class="w3-half w3-medium w3-padding-left w3-padding-right ">
<label class="w3-show-block">Catégorie * </label>
<select class="w3-select w3-border w3-margin-bottom" name="categorie">
  <option value="default" disabled selected>Choisissez une catégorie</option>
  <?php
  foreach($inputtype as $key=>$value){
	  echo "<option value='".$value['id_category_offer']."'>".$value['category_name']."</option>";
  }
  ?>
</select>
<label class="w3-show-block">Vous êtes un * </label>
<div class="w3-half">
<input class="w3-radio " type="radio" name="type_user" value="particulier" checked>
<label class="w3-validate">Particulier</label>
</div>
<div class="w3-half">
<input class="w3-radio" type="radio" name="type_user" value="professionnel">
<label class="w3-validate ">Professionnel</label>
</div>
<div class="w3-margin-bottom">
<label class="w3-show-block ">Type d'annonce* </label>
<div class="w3-half">
<input class="w3-radio" type="radio" name="type_offer" value="Depot" checked >
<label class="w3-validate">Offres </label>
</div>
<div class="w3-half">
<input class="w3-radio" type="radio" name="type_offer" value="Demande">
<label class="w3-validate">Demandes</label>
</div>
</div>
<label class="w3-show-block w3-margin-top">Titre de l'annonce </label>
<input class="w3-input w3-border" type="text"name="titre_annonce" required>
<label class="w3-show-block w3-margin-top">Texte de l'annonce </label>
<textarea style="width:100%;max-width:100%;"rows="6" cols="15"name="texte_annonce" required></textarea>
<label class="w3-show-block w3-margin-top">Durée de l'annonce *</label>
<select class="w3-select w3-border w3-margin-bottom" name="categorie_time">
  <option value="0" disabled selected>Choisissez une durée </option>
  <?php
  foreach($inputtimes as $key=>$value){
	  	  echo "<option value='".$value['id_category_time']."'>".$value['category_time_name']."</option>";

  }
  ?>
</select>
</div>
</div>


<div class="row background-white"style="height:250px;">
<h1 class=" w3-allerta  w3-margin-0 w3-margin-bottom w3-black w3-xlarge w3-padding-left">Ajouter une image</h1>
<div class="w3-col-xs-4">
<input class="w3-btn w3-white"type="file"name="image1"value="parcourir">

</div>
<div class="w3-col-xs-4"></div>
<div class="w3-col-xs-4"></div>

</div>


<div class="row background-white">

<h1 class="">Localisation</h1>
<div class="w3-half w3-medium w3-padding-left w3-padding-right">
	<label class="w3-show-block">Ville ou code postal </label>
	<input class="w3-input w3-border" type="text"name="code_postal"id="codePostal" required>
	<div id="contentCodePostal"></div>
	<label class="w3-show-block w3-margin-top">Adresse</label>
	<input class="w3-input w3-border w3-margin-bottom" type="text"name="addresse" required>
</div>
</div>
<div class="row background-white">
<h1 class="  w3-margin-0 w3-margin-bottom  w3-allerta  w3-black w3-xlarge w3-padding-left">Vos informations</h1>

<div class="w3-half w3-medium w3-padding-left">
<div>
	<label class="w3-show-block">Pseudo</label>
<input class="w3-input w3-border w3-animate-input w3-margin-bottom" name="user_pseudo"type="text" style="width:50%" required>
		<label class="w3-show-block">Email</label>
<input class="w3-input w3-border w3-animate-input w3-margin-bottom" type="text" name="user_email"style="width:50%"required>
		<label class="w3-show-block">Téléphonne</label>
<input class="w3-input w3-border w3-animate-input w3-margin-bottom" type="text" name="user_phone"style="width:50%"required></div>

<input class="w3-check" type="checkbox"name="hide_phone">
<label class="w3-validate w3-show-inline-block">Masquer le numéro de téléphonne dans l'annonce</label>
</br>
<input class="w3-check" type="checkbox"name="accept_terms"required>
<label class="w3-validate w3-show-inline-block w3-margin-bottom">J'accepte tous les termes de ma déclaration</label>

</div>
</div>
<input class="w3-btn w3-teal w3-margin-top w3-large" type="submit" name="envoyer"value="Valider">
</form>
</div>

<script type='text/javascript'>
	$('#DepotAnnonceForm').hide();
	
	function showEmployeur(){
	$('#DepotAnnonceForm').fadeOut();
	}
	function showDeposerForm(){
	$('#DepotAnnonceForm').fadeIn();
		
	}
$(document).ready(function(){

	$("#codePostal").keyup(function(){
		var recherche = $(this).val();
		var data = 'motclef='+recherche;
		if(recherche.length>=0){
			$.ajax({
				type : "GET",
				url : "result.php",
				data : data,
				success : function(server_response){
					$("#contentCodePostal").html(server_response).show();
				}
				
			});

		}
	});	
		function addComplete(valeur){
			$("#codePostal").html(valeur);
		};	
});
	
</script>
