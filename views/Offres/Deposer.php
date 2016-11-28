
<!-- ALERTE OFFRE AJOUTEE -->
<?php
if($this->alerteDeposer=="ok"){ ?>
			<div class="container animate bounce">
			<div class="alert alert-success">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>L'offre a été ajoutée !!</strong>
			</div>
			</div>
<?php } ?>
<!-- ALERTE ERREUR D'AJOUT -->
<?php
if($this->alerteDeposer=="no"){ ?>
			<div class="container animate bounce">
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
						<span  style="position:relative;
						dsiplay:flex;">
						<h1>Vous êtes ?</h1>
						<button  class="btn"onclick="showDeposerForm()"
										style="width:200px;height:200px;border-radius:50%!important;">
						Un demandeur <br>d'emploi</button>
						
						<button class="btn" onclick="showEmployeur()"
										style="width:200px;height:200px;border-radius:50%!important;">
						Un employeur</button>
						</span>
						</center>
					</div>

</div><!-- END CONTAINER -->


<div id="DepotAnnonceForm" class="container" style="margin-top:0px;">

	<div class="row background-white">

		<h1 style=" background:black;color:white;margin:0px;font-size:30px;padding:6px;">Votre annonce</h1>

		<form action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_deposer_form_offer.php';?>" 
		method="post" enctype='multipart/form-data'>

	<!-- VOTRE ANNONCE IINFOS GENERALES -->
		<div class="col-xs-8 ">

			<div class="form-group">
			<label class="">Catégorie </label>
				<select class="form-control" name="categorie" >
				  <option value="default" disabled selected>Choisissez une catégorie</option>
				  <?php
				  foreach($inputtype as $key=>$value){
					  echo "<option value='".$value['id_category_offer']."'>".$value['category_name']."</option>";
				  }
				  ?>
				</select>
			</div>
			
			<div class="form-group ">				
				<label class="">Vous êtes un </label>
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
				<label class="w3-show-block ">Type d'annonce </label>
				<div class="w3-half">
				<input class="w3-radio" type="radio" name="type_offer" value="Depot" checked >
				<label class="w3-validate">Offres </label>
				</div>
				<div class="w3-half">
				<input class="w3-radio" type="radio" name="type_offer" value="Demande">
				<label class="w3-validate">Demandes</label>
				</div>
			</div>
			<div class="checkbox">
			<label><input type="checkbox" name="diplome">Avec ou sans diplôme ?</label>
			</div>
			<div class="form-group">
			<label class="">Titre de l'annonce </label>
				<input class="form-control" type="text"name="titre_annonce" required>
			</div>
			
			<div class="form-group">
			<label class="">Texte de l'annonce </label>
				<textarea style="width:100%;max-width:100%;max-height:250px;"rows="6" cols="15"name="texte_annonce" required></textarea>
			</div>
			
			<div class="form-group">
			<label class="">Durée de l'annonce </label>
				<select class="form-control" name="categorie_time">
				  <option value="default" disabled selected>Choisissez une durée </option>
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
		<h1 style=" background:black;color:white;margin:0px;font-size:30px;padding:6px;">Ajouter une image</h1>
		<div class="col-xs-12">
			<center><input class="btn btn-default form-control"type="file"name="image1" id="image1" value="parcourir"></center>

		</div>
		<div class="col-xs-4 loadImage"></div>
		<div class="col-xs-4 loadImage"></div>

	</div>

	<!-- LOCALISATION -->
	<div class="row background-white">
		<h1 style=" background:black;color:white;margin:0px;font-size:30px;padding:6px;">Localisation</h1>
		<div class="col-xs-6">
			<div class="form-group">
				<label>code postal </label>
				<input class="form-control" type="text"name="code_postal"id="codePostal" required>
			</div>
			<div class="form-group">
				<label>ville</label>
				<input class="form-control" type="text"name="ville"id="ville" required>
				<div id="contentVille"style="max-height:200px;overflow:auto;margin-top:3px;margin-bottom:10px;"></div>
			</div>			
			<div class="form-group">
				<label>Adresse</label>
				<input class="form-control" type="text"name="addresse" required>
			</div>
			<div class="form-group">
				<label class="">Téléphonne</label>
				<input id="phone" class="form-control" type="text" name="user_phone"style="width:50%"required>
				<div id="contentPhone"style="max-height:200px;overflow:auto;margin-top:3px;margin-bottom:10px;"></div>
			</div>	<!-- form-group -->
			
		</div><!-- COL -->
	</div><!-- ROW -->


	<!-- VOS INFORMATIONS -->
	<div class="row background-white">
		<h1 style=" background:black;color:white;margin:0px;font-size:30px;padding:6px;">Vos informations</h1>

		<div class="col-xs-8" style='margin-bottom:20px;'>
		
	
			<div class="form-group">
				<label class="">Pseudo</label>
				<?php
				if($userInfos){
					echo '<input  id="user_pseudo" class="form-control" name="user_pseudo" value="'.$_SESSION['Auth']['pseudo'].'" type="text" style="width:50%" disabled  >';
				}else{
					echo '<input  id="user_pseudo" class="form-control" name="user_pseudo"  " type="text" style="width:50%" required>';

				}
				?>			
			</div><!-- form-group -->
			
			<div class="form-group">
				<label class="">Email</label>
				<?php
				if($userInfos==true){
					echo '<input id="user_email" class="form-control" name="user_email" value="'.$_SESSION['Auth']['email'].'" type="text" style="width:50%" disabled  >';
				}else{
					echo '<input id="user_email" class="form-control" type="text" name="user_email" style="width:50%"required> ';
				}
				?>	
			</div><!-- form-group -->
			


				<input class="" type="checkbox"name="hide_phone">
				<label class="">Masquer le numéro de téléphonne dans l'annonce</label></br>
				<input class="" type="checkbox"name="accept_terms"required>
				<label class="">J'accepte tous les termes de ma déclaration</label><br>
				<input class="btn btn-warning" type="submit" name="deposer"value="Valider">

		</div><!-- COL -->
	</div><!-- ROW -->

	</form><!-- END FORM -->
</div><!-- END CONTAINER -->


<script type="text/javascript" src="<?=WEBROOT?>js/previsualiser_annonce.js"></script>

<script type='text/javascript'>
		
		
			$("button").click(function(){
				$('button').css('backgroundColor','white').css('font-size','15px');
				$(this).css({
						'backgroundColor':'green',
						'font-size':'30px'
						});
				
				
			});
			
			
			$('#DepotAnnonceForm').hide();
			
			var Errors = false;
			
			function showEmployeur(){
			$('#DepotAnnonceForm').hide(250);
			}
			function showDeposerForm(){
			$('#DepotAnnonceForm').show(250);
				
			}
			//input ville 
			function addComplete(elem){
					var val = $(elem).html();
					$("#ville").val(val);
					$("#contentVille").html("").hide();
			};	
			
		$(function(){
			
			//envoi formulaire
			$('form').submit(function(e){
					if(Errors==true){
							e.preventDefault();
					$(':submit').after("Vous n'avez pas remplis tous les champs ou il y a eu une erreur.");
					}
			
			var $in_mail = $("#user_email").removeAttr("disabled");
			var $in_pseudo = $("#user_pseudo").removeAttr("disabled");
											
			});			
			
			
			var countError=0;
			var myRegex = /[a-zA-Z]/;
			
			
			//input telephonne
			$("#phone").on({' keyup' : function(){
				$valeur = $(this).val();
					
				if (myRegex.test($valeur)) {
				Errors=true;
				if(Errors==true){
				$("#contentPhone").html("entrez un numéro valide").show(250);

				}	
				}else{
				Errors=false;
		
				}
	
			},'blur' : function(){
				
				if(Errors==true){
					$("#contentPhone").html("entrez un numéro valide").show(250);

				}else{
						$("#contentPhone").html("").hide(250);
				}
				if ($(this).val().length==0){
						$("#contentPhone").html("").hide(250);
						Errors=false;
			}	}			
				
				
				
			});
			
			//input ville
			$("#ville").keyup(function(){
				var recherche = $(this).val();
				var chemin = "http://localhost/www/PROJETS%20EXTERNES/ALDNTemplate4/ALDN4/site/views/Offres/result.php";
				
				if(recherche.length>0){
				$.ajax({
						type : "GET",
						url : chemin,
						data : 'motclef='+recherche,
						success : function(html){
							$("#contentVille").html(html).show();
						}
					});

				}else if(recherche.length==0){
						$("#contentVille").html("").hide();
						
				}
			});	
			
		});
			
		</script>



	