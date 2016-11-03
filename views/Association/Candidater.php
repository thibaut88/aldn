

<div class="container background-white">

<div class="row">
            <!-- FORMULAIRE ADHESION -->
	<div class="col-sm-6 col-sm-offset-3">
	
			<!-- TITRE FORMULARIE -->
<h1 class="text-center">Candidater<small> formulaire d'adhésion</small></h1>


              <form class="form"method="post"action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/sendAdhesionEmail.php'?>">
			<div class="row">
				<div class="col-sm-6">
			<div class="form-group">
			<label for="name">Nom :</label>
			<input class="form-control"type="text" name="name" id="name"placeholder="un nom">
			</div>
			</div>
			<div class="col-sm-6">
    		<div class="form-group">
			<label for="lastname">Prénom :</label><br>
			<input class="form-control"type="text" name="fistname" id="fistname"placeholder="un prénom">
			</div>
				</div>
		
			<div class="col-sm-12">
			 		<div class="form-group">
			<label for="email">E-mail :</label><br>
			<input class="form-control"type="text" name="email" id="email"placeholder="un email">
			</div>
			</div>
			<div class="col-sm-12">
    			<div class="form-group">
			<label for="addresse">Adresse :</label><br>
			<input class="form-control"type="text" name="adresse" id="adresse"placeholder="une adresse">
			</div>
			</div>
			<div class="col-xs-6">
    			<div class="form-group">
			<label for="cp">Code Postal :</label><br>
			<input class="form-control"type="text" name="cp" id="cp"placeholder="un code postal">
			</div>
			</div>
				<div class="col-xs-6">
    			<div class="form-group">
			<label for="city">Ville :</label>
			<input class="form-control"type="text" name="town" id="town"placeholder="une ville">
			</div> 
			</div> 
				<div class="col-sm-12">
    			<div class="form-group">
			<label for="phone">Téléphonne :</label><br>
			<input class="form-control"type="text" name="tel" id="tel"placeholder="un numéro de téléphonne">
			</div>
				</div>
				</div>
			<input type="checkbox" name="acceptTerms" id="jevalide">
			<label for="jevalide"class="w3-text-white">Je déclare adhérer à l'Association en tant qu'adhérent utilisateur :</label>
			<center>
			<input class="btn btn-default" type="submit" name="sendAdhesion" value="envoyer">
			</center>
			
			
</form>
	</div><!-- col lg 12 -->

	</div><!--row -->
	</div><!--container -->
