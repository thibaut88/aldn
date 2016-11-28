
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
		<div class="row">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres'; ?>" 	title="retour"class="animate fadeInLeft animated">
			<button type="submit"class="btn btn-default"name="backpage"style="">Retour</button>
			</a>

			<!-- FIL D'ARIANE -->
			<h1 class=""><b>Offre n°<?= $offer['id_offer'];?></b></h1>
		</div>
	</div>

	
		
		

	<div class="container">

	<div class="row">
	<!-- TITRE OFFRE -->
			<h1 style="letter-spacing:1px;font-size:23px;padding:10px; width:50%;"><?= $offer['titre_offer']?></h1>

			<!-- PARTIE GAUCHE -->
		<div class="col-xs-12 col-sm-6 ">
		

			<div class="row" >
			
					<!-- INFO MIS EN LIGNE -->
					<div style="
					border-top:2px solid rgba(0,0,0,0.1);
					border-bottom:2px solid rgba(0,0,0,0.1);
					background:rgba(0,0,0,0.05);
					">
					<img src="http://ultraimg.com/images/2016/07/29/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg"
					width="100%"height="280px"class="w3-show-block"style="background:white!important;margin:auto!important;">
					<p style="line-height:30px;;margin:0px;"><b>Mise en ligne :</b> <?= $offer['date_ajout']?> <b>Par : </b> <?= $offer['pseudo_offer']?></p>
					</div>

					
					<!-- DESCRIPTION -->
					<div style="
					margin-top:10px;
					border-top:2px solid rgba(0,0,0,0.1);
					border-bottom:2px solid rgba(0,0,0,0.1);
					">
						<h2 ><u>Description :</u></h2>
						<p> <?= $offer['description_offer']?> </p>
					</div>
				
				
				
				
		<div class="col-md-12 col-xs-12 " style="padding:0px;">

					<table class="table table-responsive">
						<tr><td>Durée de l'offre</td>
						<td><?= $offer['length_offer']?></td></tr>
						
						<tr><td>code postal</td>
						<td><?=$offer['code_postal']?></td></tr>
						
						<tr><td>tél</td>
						<td><?=$offer['phone_offer']?></td></tr>
						
						<tr><td>type de l'offre</td>
						<td><?=$offer['annonce_type']?></td></tr>
						
						<tr><td>type de demande</td>
						<td><?=$offer['user_type']?></td></tr>
						
						<tr><td>durée</td>
						<td><?=$timeOffer?></td></tr>
						
						<tr><td>catégorie</td>
						<td><?=$categoryOffer?></td></tr>
			
					</table>
		</div>
		
		</div><!-- row -->

		</div><!-- COL LEFT -->

		
		
		<!-- PARTIE DROITE -->
		<div class="col-xs-6 col-xs-offset-3  col-sm-4 col-sm-offset-0 ">
				
				<h3 style="letter-spacing:1px;font-size:23px;text-align:center;padding:10px;">Destinataire : <b><?=$offer['pseudo_offer'];?></b></h3>
				
				<div class="form-group">
					<button style="" class="btn btn-default  form-control" type="submit"name="send">
					<i class="fa fa-envelope" aria-hidden="true" style="">   envoyer un mail</i> </button>
				</div>
				
				<!-- si connecté -->
				<?php if(isset($_SESSION['Auth']['id'])&&isset($_SESSION['Auth']['pseudo']) && $_SESSION['Auth']['email'] == $offer['email_offer']){ ?>
				
					<div class="form-group">
						<a href="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/deleteOffer.php?idOffer='.$offer['id_offer']?>">	
					<button style="" class="btn btn-default  form-control" type="submit"name="send">
						<i class=" fa fa-envelope" aria-hidden="true"> supprimer l'annonce</i>
						</button></a>
					</div>
				<?php
				}
				 ?>
				 	<div class="form-group">
					<button style="" class="btn btn-default  form-control" type="submit"name="send">
					<i class=" fa fa-envelope" aria-hidden="true"> Voir le numéro</i>  </button>
					</div>
							<div id="contentNumeroUser">
							</div>
							
							
							
				 </div>

		</div><!-- COL RIGHT-->
	
	</div><!-- ROW -->
	</div><!-- CONTAINER -->