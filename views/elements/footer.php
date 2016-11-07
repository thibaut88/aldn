            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="class margin-bottom-10">Disclaimer</h3>
                            <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                            <p>Most of the images used here are available from
                                <a href="http://www.shutterstock.com/" target="_blank">shutterstock.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Details Contact</h3>
                            <p>
                                <span class="fa-phone">Téléphonne:</span>&nbsp;06.59.15.49.89
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">&nbsp;juridbirs@gmail.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.example.com">www.example.com</a>
                            </p>
                            <p>Ou sommes nous ?
                                <br>En façe de la salle des fêtes
                                <br>Fontenay 88000
                                <br>Françe</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Accès rapide</h3>
                            <ul class="menu">
									<?php if(isset($_SESSION['Auth']['logged'])&&$_SESSION['Auth']['logged']){ ?>
                   
									<li>
                                    <a class="fa-tasks" href="<?=WEBROOT?>Users">Mon compte</a>
                                </li>
											<?php } else {?>
								<li>
                                    <a class="fa-tasks" href="<?=WEBROOT?>Users/Inscription">Inscription</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="<?=WEBROOT?>Users/Connection">Connection</a>
                                </li>
										<?php } ?>
										
								<li>
                                    <a class="fa-tasks" href="<?=WEBROOT?>Articles">Voir les articles</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="<?=WEBROOT?>Offres">Voir les offres</a>
                                </li>
								       <li>
                                    <a class="fa-users" href="<?=WEBROOT?>Association/Contacts">Contacts</a>
                                </li>
							</ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
							    <li>
                                    <a href="<?=WEBROOT?>Association/Presentation" target="_blank">L'association</a>
                                </li>
                                <li>
                                    <a href="<?=WEBROOT?>Offres" target="_blank">Offres d'emploi</a>
                                </li>
                                <li>
                                    <a href="<?=WEBROOT?>Association/AideExterne" target="_blank">Aide informatique</a>
                                </li>
                                <li>
                                    <a href="<?=WEBROOT?>Acte/AutreDemande" target="_blank">Conseils en droit</a>
                                </li>
                                <li>
                                    <a href="<?=WEBROOT?>Partenaires" target="_blank">Nos partenaires</a>
                                </li>
								     <li>
                                    <a href="<?=WEBROOT?>Association/MentionsLegales" target="_blank">Mentions Légales</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2016  <a href="#" title="portfolio créateur" title="créateur du site">Copyright Thibaut Marchal</a></p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->