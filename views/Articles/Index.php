
<div class="container">
<div class="row">
	
	<!-- LES ALERTES -->
	<?php
	//ALERTE POUR INFORMER QU4IL FAUT SE CONNECTER POUR UTILISER LE PANIER
	if ($displayShouldConnect){?>
	<div class="alerteArticle w3-card-2">
	<p>Il faut �tre connect� pour utiliser le panier</p><span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
	</div>
	<?php } ?>
	<?php if($displayAddPanier){ ?>
	<div class="alerteArticle w3-card-2 w3-animate-zoom">
	<p class="w3-center">Article ajout� au panier</p><span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
	</div>
	<?php }  ?>
	
	<!-- BOUTONS DE TRI -->
	<div id="filterArticle">
	<center>
	<button onclick="showFree()"type="button"name="GRATUITS">GRATUITS</button>
	<button onclick="showBuy()"type="button"name="PAYANTS">PAYANTS</button>
	<center>
	</div>
</div><!-- row -->
	
	<!-- L'AFFICHAGE DES ARTICLES -->
	<?php
	$articles = $this->articles;
	if(count($articles)>0){
		foreach ($articles as $k=>$v){?>
					<?php $type = ($v['payant']==1)? "oui":"non"; ?>
			<div  class="row ArticleRow w3-card-2 <?=$type?>">
			
			
			<div class="col-lg-4 ArticleInfos" >

				<h2><a href="javascript:void(0)"><?= $v['nom_article'];?></a></h2>
				<p>DESCRIPTION</p>
				
				<table class="table table-responsive">
				<tr>
				<td>Date d'ajout :</td>
				<?php 
				$table = explode('-',$v['date_ajout_article']);
				$months = array("01"=>'janvier',"02"=>'f�vrier',"03"=>'mars',"04"=>'avril',"05"=>'mail',"06"=>'juin',
				"07"=>'juillet',"08"=>'ao�t',"09"=>'sept',"10"=>'oct',"11"=>'nov',"12"=>'d�c');
				$year = $table[0];
				$month = $table[1];
				$day = $table[2];

				?>
				<td>le <?=$day.' '.$months[$month].' '.$year?></td>
				</tr>
				<tr>
				<td>Cat�gorie :</td>
				<td><?= $v['category_article']?></td>
				</tr>
					<?php if($v['payant']==1){ ?>

				<tr>
				<td>Prix :</td>
				<td><?= $v['prix_unitaire']?> euros</td>
				</tr>	
					<?php }else{ ?>
				<tr>
				<td>Payant :</td>
				<td>Non</td>
				</tr>					
					<?php }
					?>
				</table><!-- table -->
			</div><!-- COL -->
			
			
			
			<div class="col-lg-4 ArticleDescription">
			<p>
			<!-- AFFICHER 255 CARACTERES SEULEMENT -->
			<p><?= $v['description_article']; ?></p>
			</div><!-- COL -->
			
			
	
			<div class="col-lg-4 ArticleButtons" >
			<!-- IMAGE DU PDF -->
			
			<p><img class="w3-hide-small" src="<?=$v['link_image_article']?>"></p>
			
			<?php if($type==="non"){ ?>
			<p class=" buttonArticle">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).''.$v['link_pdf']?>"title="lire"alt="lire">
			<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Lire</a>
			</p>	
			<p class=" buttonArticle">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).''.$v['link_button_download']?>"title="telecharger"alt="telecharger">
			<i class="fa fa-download" aria-hidden="true"></i> T�l�charger</a>
			</p>
			<?php }  ?>	
			
			<p class=" buttonArticle">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/addPanier.php?tobuy='.$v['id_article'].''?>">
			<i class="fa fa-shopping-bag" aria-hidden="true"></i> Panier</a>
			</p>
				
			</div><!-- COL -->
			</div><!-- row -->
	<?php } }
	?>

			
			</div><!-- container -->

			
			
			<!-- SCRIPTS -->
			<script type="text/javascript">
			
				//MONTRER LES ARTICLES GRATUITS
				function showFree(){

					var $free = $('.non');
					var $buy = $('.oui');
					
					$buy.each(function(){
						console.log(this);
						$(this).fadeOut();
						
					});
					$free.each(function(){
						console.log(this);
						$(this).fadeIn();
						
					});
				}
				//MONTRER LES ARTICLES PAYANTS
				function showBuy(){

					var $free = $('.non');
					var $buy = $('.oui');
					
					$free.each(function(){
						$(this).fadeOut();
						
					});
					$buy.each(function(){
						$(this).fadeIn();
						
					});
				}
			
		
			
			</script>	
		