
			<?php
			// Si l'utilisateur est pas connecté
			 if ($displayShouldConnect){?>
			<div class="container">
			<div class="alert alert-warning">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Il faut être connecté pour utiliser le panier !!</strong>
			</div>
			</div>
			<?php } 		
			
			// Si pas de resultat 
			 if ($diplay_no_result){?>
			<div class="container">
			<div class="alert alert-danger">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>aucun article </strong>
			</div>
			</div>
			<?php } 
			
			// Si article ajouté au panier
			 if ($displayAddPanier){?>
			<div class="container">
			<div class="alert alert-success">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Article ajouté au panier !!</strong>
			</div>
			</div>
			<?php } ?>
			
		<div class="container">
	
<div class="row">
	
	
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
			<div  class="row ArticleRow  <?=$type?>">
			
			
			<div class=" col-xs-12  col-md-8 col-lg-4 ArticleInfos" >

				<h2><a href="javascript:void(0)"><?= $v['nom_article'];?></a></h2>
				<p>DESCRIPTION</p>
				
				<table class="table table-responsive">
				<tr>
				<td>Date d'ajout :</td>
				<?php 
				$table = explode('-',$v['date_ajout']);
				$months = array("01"=>'janvier',"02"=>'février',"03"=>'mars',"04"=>'avril',"05"=>'mail',"06"=>'juin',
				"07"=>'juillet',"08"=>'août',"09"=>'sept',"10"=>'oct',"11"=>'nov',"12"=>'déc');
				$year = $table[0];
				$month = $table[1];
				$day = $table[2];
				$day=explode(' ',$day);
				$day=$day[0];
				?>
				<td>le <?=$day.' '.$months[$month].' '.$year?></td>
				</tr>
				<tr>
				<td>Catégorie :</td>
				<td><?= $v['categorie']?></td>
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
			
			<p><img class="hidden-xs" src="<?=$v['vignette']?>"></p>
			
			<?php if($type==="non"){ ?>
			<p class=" buttonArticle">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).''.$v['link_pdf']?>"title="lire"alt="lire">
			<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Lire</a>
			</p>	
			<p class=" buttonArticle">
			<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).''.$v['link_button_download']?>"title="telecharger"alt="telecharger">
			<i class="fa fa-download" aria-hidden="true"></i> Télécharger</a>
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

<script type="text/javascript" src="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>js/articles.js?>"></script>	
		