	<div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Tél:</strong>&nbsp;06.59.15.49.89
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <a href="#"><strong>Email:</strong>&nbsp;juridbirs@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div><!-- FIN preheader hidden xs (contacts info)-->
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?=WEBROOT?>Association" title="ALDN logo">
							<!-- IMAGE DE BASE TEMPLATE <img src="assets/img/logo.png" alt="Logo" /> -->
								<?php
								//MON LOGO
								include 'assets/img/logoALDN.html';
								?>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
			
			
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
								
                                    <li><!-- bouton acceuil -->
                                        <a href="<?=WEBROOT?>Association" class="fa-home active">Acceuil</a>
                                    </li>
									
									
										<li><!-- onglet association -->
                                        <span class="fa-th ">ALDN</span>
                                        <ul>
						
									<li>
                                        <a href="<?=WEBROOT?>Association/Presentation" class="fa-comment ">Présentation</a>
                                    </li>	
									
                                       	 <li>
                                        <a href="<?=WEBROOT?>Association/Candidater" class="fa-comment ">candidater</a>
                                    </li>						
									<li>
                                        <a href="<?=WEBROOT?>Association/AideExterne" class="fa-comment ">aide extérieur</a>
                                    </li>
									<li>
                                        <a href="<?=WEBROOT?>Association/Charte" class="fa-comment ">charte associative</a>
                                    </li>
									<li>
                                        <a href="<?=WEBROOT?>Association/MentionsLegales" class="fa-comment ">mentions légales</a>
                                    </li>
                                        </ul>
                                    </li>
									<li><!-- bouton contact -->
                                        <a href="<?=WEBROOT?>Association/Contacts" class="fa-comment ">Contacts</a>
                                    </li>
									
									
										<li><!-- onglet mon compte -->
                                        <span class="fa-th ">Mon compte</span>
                                        <ul>
										<?php if(isset($_SESSION['Auth']['logged'])&&$_SESSION['Auth']['logged']){ ?>
											
										<li>
                                        <a href="<?=WEBROOT?>Users" class="fa-comment ">mon compte</a>
                                    </li>		
										<?php } ?>
										   
                                       	 <li>
                                        <a href="<?=WEBROOT?>Users/Connection" class="fa-comment ">connection</a>
                                    </li>						
									<li>
                                        <a href="<?=WEBROOT?>Users/Inscription" class="fa-comment ">inscription</a>
                                    </li>
										<?php if(isset($_SESSION['Auth']['logged'])&&$_SESSION['Auth']['logged']){ ?>
									<li>
                                        <a href="<?=WEBROOT?>scripts/deconnection.php" class="fa-comment ">deconnection</a>
                                    </li>
										<?php } ?>

                                        </ul>
                                    </li>
									
													<li><!-- onglet Conseils en droit -->
                                        <span class="fa-th ">Conseils en droit</span>
                                        <ul>
										   <li>
                                        <a href="<?=WEBROOT?>Acte/CompromisVente" class="fa-comment ">compromis de vente</a>
                                    </li>		
                                       	 <li>
                                        <a href="<?=WEBROOT?>Acte/LocationEtCollocation" class="fa-comment ">locations et collocations</a>
                                    </li>						
									<li>
                                        <a href="<?=WEBROOT?>Acte/CessionDeDroits" class="fa-comment ">cession de droits</a>
                                    </li>
									<li>
                                        <a href="<?=WEBROOT?>Acte/Sortieindivision" class="fa-comment ">sortie d'indivision</a>
                                    </li>
											<li>
                                        <a href="<?=WEBROOT?>Acte/AutreDemande" class="fa-comment ">faire une autre demande</a>
                                    </li>
									<li> <span class="fa-th ">Articles à télécharger</span>
									<ul>
									<li>
                                        <a href="<?=WEBROOT?>Articles" class="fa-comment ">Voir les articles</a>
										</li>
										</ul>
                                    </li>
                                        </ul>
                                    </li>
									<li><!-- onglet offres d'emploi -->
                                        <span class="fa-th ">Emploi</span>
                                        <ul>
										   <li>
                                        <a href="<?=WEBROOT?>Offres" class="fa-comment ">voir les offres d'emploi</a>
                                    </li>		
                                       	 <li>
                                        <a href="<?=WEBROOT?>Offres/Deposer" class="fa-comment ">Déposer une offre</a>
                                    </li>		
                                        </ul>
                                    </li>
									<li><!-- bouton acceuil -->
                                        <a href="<?=WEBROOT?>Partenaires" class="fa-home ">Partenaires</a>
                                    </li>
									</ul>
                            </div>
							
							<!-- LIENS SOCIAUX -->
                        </div><!-- col md 8 left -->
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="http://twitter.com" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="http://facebook.com" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
								<li class="social-github">
                                    <a href="http://github.com" target="_blank" title="Github"></a>
                                </li>
                            </ul>
                        </div><!-- col md 4 -->
                    </div><!-- row -->
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->