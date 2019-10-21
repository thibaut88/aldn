
<!-- SCRIPTS JQUERY JAVASCRIPT -->
<script type="text/javascript">
//Affichage dynamique titre menu left
$(function(){
	var $tabs = $('#menugauche');
	$tabs = $tabs.find('a');

	$tabs.click(function(){
		$elem = $(this);
		$val = $elem.attr('data-titre');
		$('#title').hide().html($val).fadeIn();
	}); 
});	 
</script><!-- End script-->


<?php
	//gere l'affichage , temporaire !!

	$historique = null;
	$panier = null;
	$messages = null; 
?>


			<!-- Debut Container -->
			<div class="container">
										
							<!-- row tabulation -->
                            <div class="row tabs" style="margin-top:25px;">
							
							
							<!-- Debut navigation de gauche -->
                            <div class="col-sm-3" style='overflow-x:hidden'>
				
									<!-- TOP NAV -->
									<!-- AVATAR USER PROFILS -->
									<div class="panel panel-primary">
										<!-- Panel heading -->
									  <div class="panel-heading">
										<h3 id="title" class="panel-title text-center">Vos informations</h3>
									  </div><!-- Fin Panel Heading -->
										<!-- Panel Body -->
									<div class="panel-body" style="padding:0px;">
									<?php 
									if(!empty($this->datas['path_avatar'])){
										$src= str_replace('index.php','',$_SERVER['SCRIPT_NAME'])."".$this->datas['path_avatar'];
									}else{
										//image par défaut
										$src="data:image/jpeg;base64,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";
									}
									?>
									
									<!-- avatar image -->
									<center>
										<img width="80%" src="<?=$src?>"alt="votre image de profil">
									</center>
									
									<!-- debut form modifier avatar -->
									<form id="modify_avatar"method="post"
									action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_form_profil.php?id=$user_id'?>"
									enctype="multipart/form-data">
									<div id="avatarContent">
										<label class="btn btn-default form-control">
												Browse <input name="changerAvatar" class="" type="file" style="display: none;">
										</label>
										<input class="btn btn-default form-control"  type="submit" name="" value="changer">
									</div><!-- avatar content -->
									</form><!-- formulaire avatar -->
									
								  </div><!-- Panel body -->
								</div>	<!-- FIN panel AVATAR -->							

								
								
									<!-- BOTTOM NAV -->
									<!-- NAVIGATION USER PROFILS -->
									<!-- Tabulations Onglets de  navigation -->
                                    <ul id="menugauche"class="nav nav-pills nav-stacked">
                                        <li class="active">
                                            <a href="#sample-3a" data-toggle="tab" data-titre=" Informations personnelles">
                                                <i class="fa-gears"> </i> Informations personnelles</a>
                                        </li>
                                        <li>
                                            <a href="#sample-3b" data-toggle="tab" data-titre="Panier">
                                                <i class="fa-shopping-cart"> </i> Panier</a>
												
                                        </li>
                                        <li>
                                            <a href="#sample-3c" data-toggle="tab" data-titre=" Historiques d'achats">
                                                <i class="fa-tasks"> </i> Historiques d'achats</a>
                                        </li>
                                        <li>
                                            <a href="#sample-3d" data-toggle="tab" data-titre="Messagerie">
                                                <i class="fa-envelope-o"> </i> Messagerie</a>
                                        </li>
										<!-- STATUT Utilisateur is ADMIN -->
										<?php 
											//Si utilisateur est membre gold 
											if($this->datas['is_gold']==1){ ?>
												<li>
												<a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'../admins/index.php'?>" title="accès admin" alt="accès admin">
												<i class="fa-key"> </i> Accès administration
												</a>	
												</li>
											
											<?php } ?>
													
										
                                    </ul><!-- Fin navigation infos user -->
							</div><!-- col-sm-3 -->
							<!-- FIN partie de gauche -->
				
				
				
								<!-- DEBUT partie de droite !! -->
												
								<div class="col-sm-9"><!-- col-sm-9 rest in container -->
								
								
								<!-- debut Content tab -->
								<div class="tab-content"style="min-height:450px!important;padding:0px;">
								<!-- AFFICHAGE DES ALERTES -->
												<!-- alerte modifier pseudo -->
								<?php
								if (isset($AlerteSuccess) && $AlerteSuccess == "psok"){	 	?>
								<div class="">Votre pseudo a bien été changé
								<span onclick="this.parentElement.style.display='none'" 
								class="w3-closebtn">&times;</span></p>
								</div>
								<?php
								}
								?>	
											<!-- alerte modifier adresse -->
										<?php
									if (isset($AlerteSuccess) && $AlerteSuccess =="addr"){	?>
									<div class="w3-panel w3-red w3-card-2">Votre adresse a bien été changé<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p></div>
									<?php
									} 
									?>									
										<!-- alerte modifier ville -->
											<?php
										if (isset($AlerteSuccess) && $AlerteSuccess =="city"){		?>
										<div class="w3-panel w3-red w3-card-2">Votre ville a bien été changé<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p></div>
										<?php
										} 
										?>	
						<!-- alerte modifier code postal -->
										<?php
								if (isset($AlerteSuccess) && $AlerteSuccess =="cp"){?>
									<div class="w3-panel w3-red w3-card-2">Votre code postal a bien été changé<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p></div>
									<?php
									} 
									?>	
													<!-- alerte modifier email -->
										<?php
									if (isset($AlerteSuccess) && $AlerteSuccess =="mail"){		?>
										<div class="w3-panel w3-red w3-card-2">Votre email a bien été changé<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p></div>
										<?php
										} 
										?>		


										
								<!-------------------------- NIVEAU 1 ------------------------------->						
								<!-- Debut pane Informations personnelles -->						
								<div class="tab-pane fade in" id="sample-3a">
								<div class="row">
							
							
			
							<!-- Accordion - Alternative -->
                            <div id="accordion2" class="panel-group alternative">
							
								<!-- NIVEAU 1 -->
								<!-- Informations non modifiables -->
								<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
                                            <a class="accordion-toggle" href="#" data-parent="#accordion2" data-toggle="collapse">
                                               Bienvenue  <small> <?= $this->datas['firstname'].' '.$this->datas['name'];?></small>
                                            </a>
                                        </h4><!--panel title -->
										<h4 class="panel-title">
                                            <a class="accordion-toggle" href="#" data-parent="#accordion2" data-toggle="collapse">
                                               Prénom : <small> <?= $this->datas['firstname'];?></small>
                                            </a>
                                        </h4><!--panel title -->
										<h4 class="panel-title">
                                            <a class="accordion-toggle" href="#" data-parent="#accordion2" data-toggle="collapse">
                                               Nom : <small> <?= $this->datas['name'];?></small>
                                            </a>
                                        </h4><!--panel title -->
										</div>
								</div>
				
				
								<!-- NIVEAU 2 -->
								<!-- debut panel modifier pseudo -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse2-One" data-parent="#accordion2" data-toggle="collapse">
                                               Pseudo : <small> <?= $this->datas['pseudo'];?></small>
                                            </a>
                                        </h4>
                                    </div><!-- fin panel heading  -->
									<!-- panel content -->
                                    <div id="collapse2-One" class="accordion-body collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                 
                                                    <h3 class="no-margin no-padding">Changer votre pseudo</h3>
                                         		<!-- debut formulaire modifier pseudo -->
												<form id="modify_pseudo"action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_form_profil.php?id=$user_id';?>"method="post">
												<label class="w3-text-teal w3-show-block"for="pseudo">Changer le pseudo : </label>
												<input id="pseudo"class="w3-btn w3-white w3-border w3-hover-none"type="text"placeholder="<?= $this->datas['pseudo'];?>"name="pseudo">
												<input type="submit"class="w3-btn w3-green"name="send"value="Changer">
												</form><!-- form modifi pseudo -->
                                                </div><!-- col -->
                                            </div><!-- row -->
                                        </div><!-- panel body  -->
                                    </div><!-- panel content -->
                                </div><!-- panel default modifier pseudo  -->
						
		
								
								
								<!-- NIVEAU 3 -->
								<!-- debut panel modifier addresse -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse2-Two" data-parent="#accordion2" data-toggle="collapse">
                                               Adresse : <small> <?= $this->datas['addresse'];?></small>
                                            </a>
                                        </h4><!-- panel title  -->
                                    </div><!-- panel heading  -->
                                    <div id="collapse2-Two" class="accordion-body collapse">
                                        <div class="panel-body">
                                   <!-- debut form modifier adresse -->
									<form  id="modify_adresse"action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_form_profil.php?id=$user_id';?>"method="post">
									<label class="w3-text-teal w3-show-block"for="<?= $this->datas['addresse'];?>">Changer l'adresse : </label>
									<input id="adresse"class="w3-btn w3-white w3-border w3-hover-none"type="text"placeholder="<?= $this->datas['addresse'];?>"name="addresse">
									<input type="submit"class="w3-btn w3-green"name="send"value="Changer">
									</form><!-- form modifier adresse -->
                                        </div><!-- panel body  -->
                                    </div><!-- panel content   -->
                                </div><!-- panel default modifier addresse  -->
							
								
								
								
								<!-- NIVEAU 4 -->
								<!-- debut panel modifier ville -->  
								<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse2-Three" data-parent="#accordion2" data-toggle="collapse">
                                               Ville : <small> <?= $this->datas['ville'];?></small>
                                            </a>
                                        </h4>
                                    </div><!--panel heading -->
                                    <div id="collapse2-Three" class="accordion-body collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="no-margin no-padding">Changer votre ville</h3>
													<!--debut form modifier ville -->
													<form  id="modify_ville"action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_form_profil.php?id=$user_id';?>"method="post">
													<label class="w3-text-teal w3-show-block"for="ville">Changer la ville : </label>
													<input id="ville"class="w3-btn w3-white w3-border w3-hover-none"type="text"placeholder="<?= $this->datas['ville'];?>"name="city">
													<input type="submit"class="w3-btn w3-green"name="send"value="Changer">
													</form><!-- form modifier ville -->
                                                </div><!--col -->
                                            </div><!--row-->
                                        </div><!--panel body -->
                                    </div><!--panel content -->
                                </div><!-- panel default modifier ville  -->
							
														
										
								<!-- NIVEAU 4 -->
								<!-- debut panel modifier code postal -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse4-Four" data-parent="#accordion2" data-toggle="collapse">
                                               Code postal : <small> <?= $this->datas['code_postal'];?></small>
                                            </a>
                                        </h4><!-- panel title  -->
                                    </div><!-- panel heading  -->
                                    <div id="collapse4-Four" class="accordion-body collapse">
                                        <div class="panel-body">
                                   <!-- debut form modifier adresse -->
									<form  id="modify_adresse"action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_form_profil.php?id=$user_id';?>"method="post">
									<label class="w3-text-teal w3-show-block"for="<?= $this->datas['code_postal'];?>">Changer le code postal : </label>
									<input id="adresse"class="w3-btn w3-white w3-border w3-hover-none"type="text"placeholder="<?= $this->datas['code_postal'];?>"name="addresse">
									<input type="submit"class="w3-btn w3-green"name="send"value="Changer">
									</form><!-- form modifier adresse -->
                                        </div><!-- panel body  -->
                                    </div><!-- panel content   -->
                                </div><!-- panel default modifier code postal  -->
					
								
								
																<!-- NIVEAU 5 -->
								<!-- debut panel modifier email -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" href="#collapse5-Five" data-parent="#accordion2" data-toggle="collapse">
                                               Email : <small> <?= $this->datas['email'];?></small>
                                            </a>
                                        </h4><!-- panel title  -->
                                    </div><!-- panel heading  -->
                                    <div id="collapse5-Five" class="accordion-body collapse">
                                        <div class="panel-body">
										<!-- debut form changer email -->						
										<form  id="modify_email"action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/query_form_profil.php?id=$user_id';?>"method="post">
										<label class="w3-text-teal w3-show-block"for="mail">Changer l'adresse e-mail : </label>
										<input id="mail"class="w3-btn w3-white w3-border w3-hover-none"type="text"placeholder="<?= $this->datas['email'];?>"name="email">
										<input type="submit"class="w3-btn w3-green"name="send"value="Changer">
										</form><!-- form modifier email -->
										</div><!-- panel body  -->
                                    </div><!-- panel content   -->
                                </div><!-- panel default modifier code postal  -->
						
                            </div>  <!-- End Accordion - Alternative -->
		
                 </div><!-- row -->
               </div><!-- fin tab pane Informations personnelles -->
							



							
															
									<!-------------------------- NIVEAU 2 ------------------------------->						
									<!-- Debut pane Panier user -->						
									<div class="tab-pane fade in" id="sample-3b">	
									
									<?php if(!empty($userPanier)){?>
								   <div id="panier" >
								   <table class="table table-responsive">
								  <thead> 
								  <tr>
								   <td>PRODUIT</td>
								   <td>DESCRIPTION</td>
								   <td>PRIX UNITAIRE</td>
								   <td>QUANTITE</td>
								   <td>TOTAL</td>
								   </tr>
								   </thead>
								   <tr>
								   <td><?=$userPanier['quantite']?></td>
								   <td><?=$userPanier['pseudo_user']?></td>
								   <td><?=$userPanier['total'].' $'?></td>
								   <td>2</td>
								   <td><?=$userPanier['total'].' $'?></td>
									</table><!-- Fin table -->
								
									   <!-- Formulaire Envoyer PAYER panier -->
									   <!-- Récupère les valeurs des champs du tableau -->
									<form action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/userBuyPanier.php'?>" 
											   method="post">
									<input type="hidden"name="produit"value="">
									<input type="hidden"name="pseudo"value="">
									<input type="hidden"name="prix"value="">
									<input type="hidden"name="quantite"value="">
									<input type="hidden"name="total"value="">
									<input class="btn btn-default" type="submit"name="payer"value="payer">
									</form>
									 </div> <!-- #panier -->
									 
									 <?php } else{ ?>
									   <div id="panier" >
											<div class="alert alert-warning">
											  <strong>Votre panier est vide !!</strong>
											</div>			
									</div><!-- #panier -->
									 <?php } ?>
									 
									</div><!-- fin tab pane Panier user -->
										 
										 
										 
									<!-------------------------- NIVEAU 4 ------------------------------->						
									<!-- Debut pane historique d'achat -->						
									<div class="tab-pane fade in" id="sample-3c">
									<?php
									  //HISTORIQUE 
									  if ($historique !== null){ ?>
									<div id="old_buy">
										<p>Tokyo is the capital of Japan.</p>
										<p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
									</div>	  
									 <?php }else{ ?>
									<div id='old_buy'>
											<div class="alert alert-warning">
											  <strong>Pas d'achats en cours !!</strong>
											</div>	
											</div>
									 <?php } ?>
									 </div><!-- fin tab pane content -->
													
													
													
									<!-------------------------- NIVEAU 5 ------------------------------->						
									<!-- Debut pane messagerie -->						
								   <div class="tab-pane fade in" id="sample-3d">
									<?php
									//MESSAGES PRIVES 
									 if ($messages !== null){?>
									<div id="messagerie">
									  <p>Tokyo is the capital of Japan.</p>
									  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
									  </div> 
										 
										  <?php } 
										else {  ?>
										<div id="messagerie">
											<div class="alert alert-warning">
											  <strong>Pas de message !!</strong>
											</div>		
										</div>		
										<?php  } 
										?>
									</div><!-- fin tab pane messagerie  -->
									
				
								</div><!-- Table content -->
							</div><!-- Col-sm-9  right -->
						   </div><!-- row tabs -->
								
						</div><!-- Container -->
													







