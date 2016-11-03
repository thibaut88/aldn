
 
			<?php
			//alerte afficher message envoyé
			if($displayAlertMessageSend){ ?>
				 <div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
					<p>Votre message nous a été envoyé<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p>
				</div>
			<?php } ?>
			
			
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-9">
                            <!-- Main Content -->
                            <div class="headline">
                                <h2>Contactez-nous</h2>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor
                                sit amet, consectetur adipiscing elit landitiis.</p>
                            <br>
                            <!-- Contact Form -->
							<div class='row'>
                            <form class="animate fadeInLeft col-md-12" action="<?=WEBROOT?>scripts/form_send_contact.php" method="POST">
                                <label>Nom</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input name="firstname" class="form-control" type="text">
                                    </div>
                                </div>
                                <label>Email
                                    <span class="color-red">*</span>
                                </label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input required name="email"class="form-control" type="text">
                                    </div>
                                </div>
                                <label>Message</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-8 col-md-offset-0">
                                        <textarea name="message"rows="8" class="form-control"
														style="max-width:100%"
										></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button name="sendContact" type="submit" class="btn btn-primary animate shake">Envoyer le message</button>
                                </p>
                            </form>
							</div>
							
								<div class="row">
								<H2 class="w3-xxlarge w3-allerta w3-border w3-light-blue w3-center w3-text-shadow w3-margin-0 w3-padding ">Notre emplacement
								</H2>
								<iframe style="margin-bottom:100px;!important;"
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d664.6031490397361!2d6.587715036507536!3d48.21792923193995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ba465bce9854aa!2sChristophe+Albert!5e0!3m2!1sfr!2sfr!4v1473207778416" 
								width="100%" height="500px" frameborder="0" zoom="0";
								style="border:0;min-height:200px;max-height:500px;" allowfullscreen></iframe>
								</div>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
						
						
                        <!-- Side Column -->
                        <div class="col-md-3" >
                            <!-- Recent Posts -->
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <h3 class="panel-title animate fadeIn">Infos de contact</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, no cetero voluptatum est, audire sensibus maiestatis vis et. Vitae audire prodesset an his. Nulla ubique omnesque in sit.</p>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa-phone color-primary"></i><?=phoneAvocat?></li>
                                        <li>
                                            <i class="fa-envelope color-primary"></i><?=emailAvocat?></li>
                                        <li>
                                            <i class="fa-home color-primary"></i>http://www.example.com</li>
                                    </ul>
                                    <ul class="list-unstyled">
                                        <li>
                                            <strong class="color-primary">Lundi-Vendredi:</strong> 9am to 16pm</li>
                                        <li>
                                            <strong class="color-primary">Samedi:</strong> 10am to 15pm</li>
                                        <li>
                                            <strong class="color-primary">Dimanche & j fériés:</strong> Fermé</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End recent Posts -->
							
                            <!-- About -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class=" animate fadeIn panel-title">A propos</h3>
                                </div>
                                <div class="panel-body">
                                    Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                                </div>
                            </div>
                            <!-- End About -->
							
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
       