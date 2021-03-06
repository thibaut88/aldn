
<script type="text/javascript" src="<?=WEBROOT?>js/candidater_offer.js"></script>

<div class="container background-white">
<?php
			// Si l'utilisateur est deconnecté : Afficher alert pas connecté
			if($displayAlerte){ ?>
			<div class="container animate bounce">
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Vous êtes bien inscrit !</strong>
			</div>
			</div>
<?php } ?>
<div class="row">
            <!-- FORMULAIRE ADHESION -->

	<div class="col-xs-12 col-sm-3">
	<div class="row">
	<h1 class="text-center">TARIFS</h1>
	<div class="col-xs-12 col-md-12"style="border:2px solid black;margin-bottom:20px;margin-top:10px;padding:0px;">
          <ul class="list list-unstyled"style="font-size:16px;margin:0px;">
            <li><h2 style="text-align:center;background:orange;line-height:30px;font-size:30px;height:30px;padding:5px">MEMBRE GOLD</h2></li>
            <li><strong>20 euros </strong>seulement</li>
            <li><strong>gold! </strong>Accès privilégié</li>
            <li><strong>gold! </strong>Confiance numérique</li>
            <li><strong>5GB  </strong>Espace stockage</li>
            <li><strong>Confiance  </strong>Numérique</li>
            <li><strong>gold!  </strong>Accès administration</li>
            <li><a onclick="chooseOffer(1)" class="btn btn-warning form-control"style="margin:0px;">CHOISIR</a></li>
          </ul>
      </div><!-- col-->
	<div class=" col-xs-12 col-md-12"style="border:2px solid black;padding:0px;">
          <ul class="list list-unstyled"style="font-size:16px;margin:0px;">
            <li><h2 style="text-align:center;background:lightgreen;line-height:30px;font-size:30px;height:30px;padding:5px">MEMBRE NORMAL</h2></li>
            <li><strong>GRATUIT</strong></li>
            <li><strong>gold! </strong>Un accès normal</li>
            <li><strong>gold! </strong>Un accès au forum</li>
            <li><strong>1GB  </strong>Espace stockage</li>
            <li><a onclick="chooseOffer(2)" class="btn btn-success form-control"style="margin:0px;">CHOISIR</a></li>
          </ul>
      </div><!-- col-->
      </div><!-- row-->
      </div><!-- col-->

	<div class="col-xs-12 col-sm-7 col-sm-offset-1" style="border:2px solid lightgrey;background:rgba(49, 49, 49,1);color:white;padding-bottom">
	
			<!-- TITRE FORMULARIE -->
			<h1 class="text-center">CANDIDATER</h1>


              <form class="form"method="post"
			  action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/sendAdhesionEmail.php'?>">
			<div class="row">
				<div class="col-xs-6">
			<div class="form-group">
			<label for="lastname">Nom :</label>
			<input required class="form-control"type="text" name="lastname" id="lastname"placeholder="un nom">
			</div>
			</div>
			<div class="col-xs-6">
    		<div class="form-group">
			<label for="firstname">Prénom :</label><br>
			<input required class="form-control"type="text" name="fistname" id="fistname"placeholder="un prénom">
			</div>
				</div>
		
			<div class="col-xs-6">
			 		<div class="form-group">
			<label for="email">E-mail :</label><br>
			<input required class="form-control"type="email" name="email" id="email"placeholder="un email">
			</div>
			</div>
				<div class="col-xs-6">
			 		<div class="form-group">
			<label for="pseudo">Pseudo :</label><br>
			<input required class="form-control"type="text" name="pseudo" id="pseudo"placeholder="un pseudo">
			</div>
			</div>
				<div class="col-xs-6">
			 		<div class="form-group">
			<label for="pass">Mot de passe :</label><br>
			<input required class="form-control"type="password" name="pass" id="pass"placeholder="">
			</div>
			</div>
				<div class="col-xs-6">
			 		<div class="form-group">
			<label for="cpass">Confirmation :</label><br>
			<input required class="form-control"type="password" name="cpass" id="cpass"placeholder="">
			</div>
			</div>
			<div class="col-xs-12">
    			<div class="form-group">
			<label for="addresse">Adresse :</label><br>
			<input required class="form-control"type="text" name="addresse" id="addresse"placeholder="une adresse">
			</div>
			</div>
			<div class="col-xs-6">
    			<div class="form-group">
			<label for="postal_code">Code Postal :</label><br>
			<input required class="form-control"type="text" name="postal_code" id="postal_code"placeholder="un code postal">
			</div>
			</div>
				<div class="col-xs-6">
    			<div class="form-group">
			<label for="city">Ville :</label>
			<input required class="form-control"type="text" name="city" id="city"placeholder="une ville">
			</div> 
			</div> 
				<div class="col-xs-12">
    			<div class="form-group">
			<label for="phone">Téléphonne :</label><br>
			<input required class="form-control"type="text" name="phone" id="phone"placeholder="un numéro de téléphonne">
			</div>
				</div>
			<div class="col-xs-12">
    			<div class="form-group">
			<label for="membre">Membre :</label><br>
			<select class="form-control"type="text" name="membre" id="membre">
			<option value="2">Niveau d'adhésion</option>
			<option value="1">Membre gold (privilégié)</option>
			<option value="0">Membre normal</option>
			</select>
			</div>
				</div>
				</div><!-- row -->
			<input type="checkbox" name="acceptTerms" id="jevalide">
			<label required for="jevalide"class="w3-text-white">Je déclare adhérer à l'Association :</label>
			<center>
			<input class="btn btn-primary btn-md" type="submit" name="sendAdhesion" value="envoyer">
			</center>
			
			
</form>
	</div><!-- col lg 12 -->

	</div><!--row -->
	</div><!--container -->
