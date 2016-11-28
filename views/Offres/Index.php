
<script type="text/javascript" src="<?=WEBROOT?>js/animate_offers.js"></script>



	<!-- BAR DE RECHERCHE -->
<div class="container " style="margin-top:20px;background:#313131">
			<div class="row">
					<?php
					// BARRE DE RECHERCHE
					require 'scripts/searchnav.php';
					?>
			</div>		
</div>		
		
	<!-- CONTAINER Liste des offres -->
<div class="container" id="content_offres" style="margin-top:20px;margin-bottom:0px;background:rgba(100,100,100,0.1);padding:20px;">

					<?php 
					//LES ALERTES
					if($alertNoResult){ 
					?>
						<!-- ALERTE IL N'Y A PAS D'OFFRES -->
					<div class="alert alert-success">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Aucune offre ne correspond !!</strong>
					</div>
					<?php 
					}	
					if($alertDeloffer){
					?>
						<!-- ALERTE IL N'Y A PAS D'OFFRES -->
					<div class="alert alert-success">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>l'offre a été supprimée !</strong>
					</div>
					<?php 
					}	
					?>
					
<!-- Start row -->	
<div class="row" >
<?php
$datas=$this->datas;

			foreach($datas as $key=>$value){  
				//ON VERIFIE LE TYPE ET LA DUREE DE L'OFFRE POUR AJOUTER DES CLASSES SERVANT AU TRI
				foreach($inputtimes as $cle=>$valeur){
					if($valeur['id_category_time']==$value['length_offer']){
						$dureeOffre= $valeur['category_time_name'];
						break;
					}
				}
				foreach($inputtype as $cl=>$val){
					if($val['id_category_offer']==$value['category_offer']){
						$categoryOffer= $val['category_name'];
						break;
					}
				}	
				if(empty($value['image1'])){
					$src=WEBROOT.'ressources/images/default_offers.jpg';
				}else{
					$src=WEBROOT.$value['image1'];
				}
				
			?>

			<div class="col-xs-12 col-sm-6 background-white offer" style='min-height:400px'>
					
					<div class='row'>
						<div class="col-xs-12 col-sm-6" >
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-lg-12" >
										<img class="img-responsive" src="<?=$src?>"style="min-height:125px;min-width:125px;margin:auto;">
								</div><!-- COL -->
								<div class="col-xs-6 col-sm-6 col-lg-12" >
										<a href="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/Details/'.$value['id_offer']?>"
										title="details offre">details </a>
										<p><a href='#'alt='postuler' title='postuler'>déposer candidature</a></p>
								</div><!-- COL 12 -->
							</div><!-- ROW -->
						</div><!-- COL 6 -->
						
						<div class="col-xs-12 col-lg-6 ">
						<h2><b><?=$value['titre_offer']?></b></h2>
							<table class="table table-responsive background-white" >		
									<tr>
									<td style="text-align:left">catégorie</td>
									<td><?=$categoryOffer?></td>
									</tr><tr>
									<td style="text-align:left">durée</td>
									<td><?=$dureeOffre?></td>
									</tr><tr>
									<td style="text-align:left">type de demande</td>
									<td><?=($value['user_type']==1)?"demande d'emploi":"depot d'offre"?></td>
									</tr><tr>
									<td style="text-align:left">tél</td>
									<td><?= ($value['hide_phone']!==1)?$value['phone_offer']:'aucun';?></td>
									</tr><tr>
									<td style="text-align:left">localisation</td>
									<td><?=$value['code_postal']?></td>
									</tr><tr>
									<td style="text-align:left">date ajout</td>
									<td><?= $value['date_ajout']?></td>
									</tr>
							</table>
						</div><!-- COL 12 -->
						</div><!--row-->
					
			</div><!-- COL 6 12-->
<?php }  ?>
</div><!-- End Row -->
		

<!-- Add PAGINATION -->
<?php require "scripts/pagination_offers.php"; ?>
		
</div><!-- FIN CONTENT CONTAINER  -->
















