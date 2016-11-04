

<!-- ALERTE OFFRE AJOUTEE -->
<?php
if($this->alerteDeposer=="ok"){ ?>
			<div class="container">
			<div class="alert alert-success">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>L'offre a été ajoutée !!</strong>
			</div>
			</div>
<?php } ?>
<!-- ALERTE ERREUR D'AJOUT -->
<?php
if($this->alerteDeposer=="no"){ ?>
			<div class="container">
			<div class="alert alert-warning">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Erreur lors de l'ajout !!</strong>
			</div>
			</div>
<?php } ?>	

<div class="container">

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

</div><!-- END CONTAINER -->


<div id="DepotAnnonceForm" class="container" style="margin-top:0px;">

	<div class="row background-white">

		<h1 style=" background:black;color:white;margin:0px;line-height:40px;height:40px;font-size:30px;">Votre annonce</h1>

		<form action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_deposer_form_offer.php';?>" method="post">

	<!-- VOTRE ANNONCE IINFOS GENERALES -->
		<div class="col-xs-8 ">

			<div class="form-group">
			<label class="">Catégorie * </label>
				<select class="form-control" name="categorie">
				  <option value="default" disabled selected>Choisissez une catégorie</option>
				  <?php
				  foreach($inputtype as $key=>$value){
					  echo "<option value='".$value['id_category_offer']."'>".$value['category_name']."</option>";
				  }
				  ?>
				</select>
			</div>
			
			<div class="form-group ">				
				<label class="">Vous êtes un * </label>
				<div class="">
				<input class="w3-radio " type="radio" name="type_user" value="particulier" checked>
				<label class="w3-validate">Particulier</label>
				</div>
				<div class="">
				<input class="w3-radio" type="radio" name="type_user" value="professionnel">
				<label class="w3-validate ">Professionnel</label>
				</div>
			</div>
			
			<div class="form-group">
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
		
			<div class="form-group">
			<label class="">Titre de l'annonce </label>
				<input class="form-control" type="text"name="titre_annonce" required>
			</div>
			
			<div class="form-group">
			<label class="">Texte de l'annonce </label>
				<textarea style="width:100%;max-width:100%;"rows="6" cols="15"name="texte_annonce" required></textarea>
			</div>
			
			<div class="form-group">
			<label class="">Durée de l'annonce *</label>
				<select class="form-control" name="categorie_time">
				  <option value="0" disabled selected>Choisissez une durée </option>
				  <?php
				  foreach($inputtimes as $key=>$value){
						  echo "<option value='".$value['id_category_time']."'>".$value['category_time_name']."</option>";

				  }
				  ?>
				</select>
			</div>
			
		</div><!-- COL -->
	</div><!-- ROW -->





	<!-- AJOUTER UNE IMAGE -->
	<div class="row background-white">
		<h1 style=" background:black;color:white;margin:0px;line-height:40px;height:40px;font-size:30px;">Ajouter une image</h1>
		<div class="col-xs-4">
			<div class="form-group">
			<input class="btn w3-default form-control"type="file"name="image1"value="parcourir">
			</div>
		</div>
		<div class="w3-col-xs-4"></div>
		<div class="w3-col-xs-4"></div>

	</div>

	<!-- LOCALISATION -->
	<div class="row background-white">
		<h1 style=" background:black;color:white;margin:0px;line-height:40px;height:40px;font-size:30px;">Localisation</h1>
		<div class="col-xs-6">
			<div class="form-group">
				<label >Ville ou code postal </label>
				<input class="form-control" type="text"name="code_postal"id="codePostal" required>
			</div>
			<div class="form-group">
				<div id="contentCodePostal"></div>
				<labe>Adresse</label>
				<input class="form-control" type="text"name="addresse" required>
			</div>
		</div><!-- COL -->
	</div><!-- ROW -->


	<!-- VOS INFORMATIONS -->
	<div class="row background-white">
	<h1 style=" background:black;color:white;margin:0px;line-height:40px;height:40px;font-size:30px;">Vos informations</h1>

		<div class="col-xs-8">
			<div class="form-group">
				<label class="">Pseudo</label>
				<input class="form-control" name="user_pseudo"type="text" style="width:50%" required>
			</div><!-- form-group -->
			<div class="form-group">
				<label class="">Email</label>
				<input class="form-control" type="text" name="user_email"style="width:50%"required>
			</div><!-- form-group -->
			<div class="form-group">
				<label class="form-group">Téléphonne</label>
				<input class="form-control" type="text" name="user_phone"style="width:50%"required>
			</div>	

				<input class="" type="checkbox"name="hide_phone">
				<label class="">Masquer le numéro de téléphonne dans l'annonce</label>
				</br>
				<input class="" type="checkbox"name="accept_terms"required>
				<label class="">J'accepte tous les termes de ma déclaration</label><br>
				<input class="btn btn-warning" type="submit" name="envoyer"value="Valider">

		</div><!-- COL -->
	</div><!-- ROW -->

	</form><!-- END FORM -->
</div><!-- END CONTAINER -->



		<!-- JQUERY -->

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
