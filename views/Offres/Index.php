		
		<div class="container background-white" style="margin-top:20px;">
		<div class=" row">
			<?php
			// BARRE DE RECHERCHE
			require 'scripts/searchnav.php';
			?>
		</div>		
		</div>		
		
	<!-- CONTENEUR DE LA LISTE DES OFFRES -->
<div class="container" id="content_offres" style="margin-top:20px;margin-bottom:20px;">

			<?php 
			//LES ALERTES
			
			//Alerte pas de résultat
			$displayNoResult=$this->Errors;
			// var_dump($displayNoResult);
			if ($displayNoResult){ ?>
				<!-- ALERTE IL N'Y A PAS D'OFFRES -->
				<div ><p>Aucune offre ne correspond à vos recherches</span>
				<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
				</p></div>
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

			<div class="col-xs-12 col-sm-6 "
			style="margin-bottom:88px!important;
			margin-top:88px!important;
			min-height:260px!important;
			padding:0px;
			">
				<div class="col-xs-12 col-sm-6" style="padding:0px;">
				
					<div class="col-xs-6 col-md-6 col-lg-12" >
						<img class="" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQmb9wM9ZzGTWjWatG_efBfrVHNCQV5WDnl8T6udMQ6lrteU2G-"
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
				
				
				
				
				
				<table class="table table-responsive" >
							
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
					<td><?= ($value['hide_phone']!=="on")?$value['phone_offer']:'';?></td>
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
<hr>
					
				</div><!-- COL 12 -->
			
			</div><!-- COL 6 12-->

			<?php  }  ?>
	
		</div><!-- ROW -->
		
		
		<div class="row">
		
						<!-- PAGINATION 2 -->
			<div class="text-center">
			   <ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li class="active"><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
			   </ul>
			</div>
			
		</div><!-- ROW END PAGINATION -->
		
		
	




</div><!--FIN CONTENT CONTAINER  -->


<?php
		//PAGINATION 

		// $per_page=5;

		// $page = (isset($GLOBALS['parametre'])) ? $_GET['parametre']:1;

		// var_dump($GLOBALS['param']);
		// var_dump($GLOBALS['parametre']);

		// la page commence à 0 et on multiplie par le nombre de pages
		// $start_from = ($page-1)*$per_page;

		// $query = "SELECT * FROM table LIMIT $start_from, $per_page";

		// $total_pages = ceil($total_records/$per_page);

		// echo "<center><a href='./Offres/'>premiere page</a>";


		// for ($i=0;$i<$total_pages;$i++){
		// echo "<a href='./Offres/".$i."'>".$i."</a> ";
			
		// }
		// echo "<a href='./Offres/".$total_pages."'>Last Page</a></center>";
?>
















