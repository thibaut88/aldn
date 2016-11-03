
<script type="text/javascript">
function chooseOffer(offer){

	var $member =$('#membre');
	var $opt =$member.find("option");
	
	$opt.each(function(){
		if($(this).attr('value')==offer){
			$(this).attr('selected','selected');
			var $elem =$(this);
			$elem.addClass('bg-danger');
			console.log($elem);
		}
	});

}

</script>

<div class="container background-white">

<div class="row">
            <!-- FORMULAIRE ADHESION -->

	<div class="col-xs-3">
	<div class="row">
	<h1 class="text-center">TARIFS</h1>
	<div class="col-md-12"style="border:2px solid black;margin-bottom:20px;margin-top:10px;padding:0px;">
          <ul class="list list-unstyled"style="font-size:16px;margin:0px;">
            <li><h2 style="text-align:center;background:orange;line-height:30px;font-size:30px;height:30px;">MEMBRE GOLD</h2></li>
            <li><strong>20 euros </strong>seulement</li>
            <li><strong>gold! </strong>Un accès privilégié</li>
            <li><strong>gold! </strong>Confiance numérique</li>
            <li><strong>5GB  </strong>Espace stockage</li>
            <li><a onclick="chooseOffer(1)" class="btn btn-warning form-control"style="margin:0px;">CHOISIR</a></li>
          </ul>
      </div>
	<div class="col-md-12"style="border:2px solid black;padding:0px;">
          <ul class="list list-unstyled"style="font-size:16px;margin:0px;">
            <li><h2 style="text-align:center;background:lightgreen;line-height:30px;font-size:30px;height:30px;">MEMBRE GOLD</h2></li>
            <li><strong>20 euros </strong>seulement</li>
            <li><strong>gold! </strong>Un accès privilégié</li>
            <li><strong>gold! </strong>Confiance numérique</li>
            <li><strong>5GB  </strong>Espace stockage</li>
            <li><a onclick="chooseOffer(2)" class="btn btn-success form-control"style="margin:0px;">CHOISIR</a></li>
          </ul>
      </div>
      </div>
      </div>

	<div class="col-xs-6 col-xs-offset-1" style="border:2px solid lightgrey;background:rgba(49, 49, 49,1);color:white;">
	
			<!-- TITRE FORMULARIE -->
			<h1 class="text-center">CANDIDATER</h1>


              <form class="form"method="post"
			  action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/sendAdhesionEmail.php'?>">
			<div class="row">
				<div class="col-sm-6">
			<div class="form-group">
			<label for="lastname">Nom :</label>
			<input class="form-control"type="text" name="lastname" id="lastname"placeholder="un nom">
			</div>
			</div>
			<div class="col-sm-6">
    		<div class="form-group">
			<label for="firstname">Prénom :</label><br>
			<input class="form-control"type="text" name="fistname" id="fistname"placeholder="un prénom">
			</div>
				</div>
		
			<div class="col-sm-6">
			 		<div class="form-group">
			<label for="email">E-mail :</label><br>
			<input class="form-control"type="text" name="email" id="email"placeholder="un email">
			</div>
			</div>
				<div class="col-sm-6">
			 		<div class="form-group">
			<label for="pseudo">Pseudo :</label><br>
			<input class="form-control"type="text" name="pseudo" id="pseudo"placeholder="un pseudo">
			</div>
			</div>
				<div class="col-sm-6">
			 		<div class="form-group">
			<label for="pass">Mot de passe :</label><br>
			<input class="form-control"type="password" name="pass" id="pass"placeholder="">
			</div>
			</div>
				<div class="col-sm-6">
			 		<div class="form-group">
			<label for="cpass">Confirmation :</label><br>
			<input class="form-control"type="password" name="cpass" id="cpass"placeholder="">
			</div>
			</div>
			<div class="col-sm-12">
    			<div class="form-group">
			<label for="addresse">Adresse :</label><br>
			<input class="form-control"type="text" name="addresse" id="addresse"placeholder="une adresse">
			</div>
			</div>
			<div class="col-xs-6">
    			<div class="form-group">
			<label for="postal_code">Code Postal :</label><br>
			<input class="form-control"type="text" name="postal_code" id="postal_code"placeholder="un code postal">
			</div>
			</div>
				<div class="col-xs-6">
    			<div class="form-group">
			<label for="city">Ville :</label>
			<input class="form-control"type="text" name="city" id="city"placeholder="une ville">
			</div> 
			</div> 
				<div class="col-sm-12">
    			<div class="form-group">
			<label for="phone">Téléphonne :</label><br>
			<input class="form-control"type="text" name="phone" id="phone"placeholder="un numéro de téléphonne">
			</div>
				</div>
			<div class="col-sm-12">
    			<div class="form-group">
			<label for="membre">Membre :</label><br>
			<select class="form-control"type="text" name="membre" id="membre">
			<option value="0">Niveau d'adhésion</option>
			<option value="1">Membre gold (privilégié)</option>
			<option value="2">Membre normal</option>
			</select>
			</div>
				</div>
				</div>
			<input type="checkbox" name="acceptTerms" id="jevalide">
			<label for="jevalide"class="w3-text-white">Je déclare adhérer à l'Association :</label>
			<center>
			<input class="btn btn-default" type="submit" name="sendAdhesion" value="envoyer">
			</center>
			
			
</form>
	</div><!-- col lg 12 -->

	</div><!--row -->
	</div><!--container -->
