
<?php
$categoryOffer=$inputtype;
$timeOffer=$inputtimes;
foreach($inputtimes as $key=>$value){
	if($value['id_category_time']==$offer['length_offer']){
		$timeOffer=$value['category_time_name'];
	}
}
foreach($inputtype as $key=>$value){
	if($value['id_category_offer']==$offer['category_offer']){
		$categoryOffer=$value['category_name'];
	}
}


?>
	<div class="container">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres'; ?>"title="retour"class="animate fadeInLeft animated">
			
			<button type="submit"class="btn btn-default"name="backpage"style="margin-top:20px;">Retour</button></a>
			<!-- FIL D'ARIANE -->
			<h1 class=""
			style="font-size:25px;max-width:1060px;margin:auto;margin-top:50px!important;"><b>Offre n°<?= $offer['id_offer'];?></b></h1>
	</div>

	
		
		

	<div class="container"style="">
	<h1 class=""><?= $offer['titre_offer']?></h1>

	<div class="row">
	
			<!-- PARTIE GAUCHE -->
		<div class="col-xs-12 col-sm-6 ">
			<div class="row">
				<div class="">
				<img src="http://ultraimg.com/images/2016/07/29/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg"
				width="100%"height="280px"class="w3-show-block"style="background:white!important;margin:auto!important;">
				<p><b>Mise en ligne :</b> <?= $offer['date_ajout']?> <b>Par : </b> <?= $offer['pseudo_offer']?></p>
				</div>

				
				
				<div class="">
				<h2 class=""><u>Description :</u></h2>
				<p>
				<?= $offer['description_offer']?>
				</p>
				</div>
				
		<div class="col-md-12 col-xs-8 ">

					<table class="table table-responsive">
						<tr><td>Durée de l'offre</td>
						<td><?= $offer['length_offer']?></td></tr>
						
						<tr><td>code postal</td>
						<td><?=$offer['code_postal']?></td></tr>
						
						<tr><td>tél</td>
						<td><?=$offer['phone_offer']?></td></tr>
						
						<tr><td>type de l'offre</td>
						<td><?=$offer['type_offer']?></td></tr>
						
						<tr><td>type de demande</td>
						<td><?=$offer['type_offer']?></td></tr>
						
						<tr><td>durée</td>
						<td><?=$timeOffer?></td></tr>
						
						<tr><td>catégorie</td>
						<td><?=$categoryOffer?></td></tr>
			
					</table>
		</div>
		</div>

		</div><!-- COL LEFT -->

		
		
		<!-- PARTIE DROITE -->
		<div class="col-md-4 col-xs-6 col-xs-offset-3">
				
				<h3>Destinataire : <b><?=$offer['pseudo_offer'];?></b></h3>
				
				<div class="form-group">
					<button style="" class="btn btn-default btn-lg form-control" type="submit"name="send">
					<i class="fa fa-envelope" aria-hidden="true" style="">   envoyer un mail</i> </button>
				</div>
				
				<?php if(isset($_SESSION['Auth']['id'])&&isset($_SESSION['Auth']['pseudo'])){ ?>
				
					<div class="form-group">
						<a href="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/deleteOffer.php?idOffer='.$offer['id_offer']?>">	
					<button style="" class="btn btn-default btn-lg form-control" type="submit"name="send">
						<i class=" fa fa-envelope" aria-hidden="true"> supprimer l'annonce</i>
						</button></a>
					</div>
			
					<div class="form-group">
					<button style="" class="btn btn-default btn-lg form-control" type="submit"name="send">
					<i class=" fa fa-envelope" aria-hidden="true"> Voir le numéro</i>  </button>
					</div>
							<div id="contentNumeroUser">


								</div>
				<?php
				}
				 ?>
			
		</div><!-- COL RIGHT-->
	
	</div><!-- ROW -->
	</div><!-- CONTAINER -->