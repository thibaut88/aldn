
		<div class="container " style="margin-top:20px;background:#313131">
		<div class="row">
			<?php
			// BARRE DE RECHERCHE
			require 'scripts/searchnav.php';
			?>
		</div>		
		</div>		
		
	<!-- CONTENEUR DE LA LISTE DES OFFRES -->
<div class="container" id="content_offres" style="margin-top:20px;margin-bottom:20px;background:rgba(100,100,100,0.1)">

			<?php 
			//LES ALERTES
			
			//Alerte pas de résultat
			// $displayNoResult=$this->Errors;
			// var_dump($displayNoResult);
			if ($alertNoResult){ ?>
				<!-- ALERTE IL N'Y A PAS D'OFFRES -->
			<div class="alert alert-success">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Aucune offre ne correspond !!</strong>
			</div>
			
			
			<?php 
			}	
			
			if ($alertDeloffer){ ?>
				<!-- ALERTE IL N'Y A PAS D'OFFRES -->
			<div class="alert alert-success">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>l'offre a été supprimée !</strong>
			</div>
			
			
			<?php 
			}	
			?>
			
	<div class="row" >
	
			<?php
			//LES OFFRES DEPUIS LE CONTROLLER
			$datas=$this->datas;
			
			foreach($datas as $key=>$value){  
			
			
			//ON VERIFIE LE TYPE ET LA DUREE DE L'OFFRE POUR AJOUTER DES CLASSES SERVANT AU TRI
			foreach($inputtimes as $cle=>$valeur){
				if($valeur['id_category_time']==$value['length_offer']){
					$dureeOffre= $valeur['category_time_name'];
				}
			}
			foreach($inputtype as $cl=>$val){
				if($val['id_category_offer']==$value['category_offer']){
					$categoryOffer= $val['category_name'];
				}
			}	
			?>

			<div class="col-xs-12 col-sm-6 background-white "
			style="margin-bottom:60px!important;
			margin-top:60px!important;
			min-height:260px!important;
			padding:0px;
			">
				<div class="col-xs-12 col-sm-6" style="padding:0px;">
				
					<div class="col-xs-6 col-md-6 col-lg-12" >
						<img class="" src="data:image/jpeg;base64,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"
						style="max-height:175px;margin:auto;">
					</div><!-- COL -->
					<div class="col-xs-6 col-md-6 col-lg-12" >
						<a class=""
						href="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/Details/'.$value['id_offer']?>"
						style="min-height:50px;line-height:50px;"title="details offre">details </a>
						<p><a href=''alt='postuler'title='postuler'>déposer candidature</a></p>
					</div><!-- COL 12 -->
					
				
					
					
				</div><!-- COL 6 -->
					
					
				
				<div class="col-xs-12 col-lg-6 "style="max-height:150px; padding:0px;">
				
				
				<h2 class=""><b><?=$value['titre_offer'];?></b></h2>
				
				
				
				
				
				<table class="table table-responsive background-white" >
							
					<tr>
					<td style="text-align:left">catégorie</td>
					<td><?=$categoryOffer?></td>
					</tr>
					
					<tr>
					<td style="text-align:left">durée</td>
					<td><?=$dureeOffre?></td>
					</tr>
										
					<tr>
					<td style="text-align:left">type de demande</td>
					<td><?=($value['type_offer']==1)?"demande d'emploi":"depot d'offre"?></td>
					</tr>
										
					<tr>
					<td style="text-align:left">tél</td>
					<td><?= ($value['hide_phone']!=="on")?$value['phone_offer']:'aucun';?></td>
					</tr>
										
					<tr>
					<td style="text-align:left">localisation</td>
					<td><?=$value['code_postal']?></td>
					</tr>
					
					
					<tr>
					<td style="text-align:left">date ajout</td>
					<td><?= $value['date_ajout']?></td>
					</tr>
					
					
				</table>

					
				</div><!-- COL 12 -->
			
			</div><!-- COL 6 12-->

			<?php  }  ?>
	
		</div><!-- ROW -->
		
		<div class="clearfix"></div>
		<div class="row" style="margin-top:55px;">
						<!-- PAGINATION  -->
			<div class="text-center">
					<ul class="pagination">
					
							  <li><a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>Offres">&laquo;</a></li>
					<?php
						for ($i=1;$i<$this->last_page+1;$i++){  ?>
							<li 
							<?php  if($i==$this->current_page) {echo 'class="active"';} ?>
							>
									<a href="<?=WEBROOT?>Offres/<?=$i?>"><?=$i?></a>
							  </li>
					<?php	} ?>
							<li><a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>Offres/<?=$this->last_page?>">&raquo;</a></li>
							
					</ul>
			</div><!-- PAGINATION END -->
						
		</div><!-- ROW END PAGINATION -->
		
</div><!--FIN CONTENT CONTAINER  -->















