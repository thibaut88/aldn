<script type="text/javascript">
	var errors=Array();
	var counterError =0;
	var isInt = true;
</script><!-- Fin script control du formulaire -->
<script type="text/javascript" src="<?=WEBROOT?>js/avatar_register.js"></script>
<script type="text/javascript" src="<?=WEBROOT?>js/password_register.js"></script>
<script type="text/javascript" src="<?=WEBROOT?>js/phone_register.js"></script>
<script type="text/javascript" src="<?=WEBROOT?>js/send_register.js"></script>
<script type="text/javascript" src="<?=WEBROOT?>js/previsualiser_avatar_register.js"></script>




            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" method="post" action="" enctype="multipart/form-data">
                                <div class="signup-header">
                                    <h2>Enregistrez un nouveau compte</h2>
                                    <p>Déjà membre? Cliquez
                                        <a href="<?=WEBROOT?>Users/Connection">ICI</a> pour connecter votre compte.</p>
                                </div>
								
								<div class="row ">
									<div class="col-xs-12">
									<div class="row">
										<div class="form-group  col-sm-6">
											<label>Email</label>
													<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input required name="email"class="form-control margin-bottom-20" type="email">
										</div>		
										</div>		
										<div class="form-group col-sm-6">
											<label>Peudonyme</label>
											<input required name="pseudo"class="form-control margin-bottom-20" type="text">
											</div>
									</div>
									</div>
									
										<div class="col-xs-12">
										<div class="row">
											<div class=" form-group col-sm-6">
												<label>Mot de passe</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input required name="pass"class="form-control margin-bottom-20" type="password">
											</div>
											</div>
											<div class="form-group  col-sm-6">
												<label>Confirmation</label>
												<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input required name="cpass"class="form-control margin-bottom-20" type="password">
											</div>		
											</div>		
									</div>
									</div>
									
											<div class="col-xs-12">
											<div class="row">
											<div class=" form-group col-sm-6">
												<label>Nom</label>
												<input required  name="lastname"class="form-control margin-bottom-20" type="text">
											</div>
											<div class="form-group  col-sm-6">
												<label>Prénom</label>
												<input required name="firstname"class="form-control margin-bottom-20" type="text">
											</div>		
									</div>								
									</div>								
									<div class="col-xs-12">
											<div class="row">
											<div class=" form-group col-sm-6">
												<label>Adresse</label>
												<input required  name="addresse"class="form-control margin-bottom-20" type="text">
											</div>
											<div class="form-group  col-sm-6">
												<label>Ville</label>
												<input required name="city"class="form-control margin-bottom-20" type="text">
											</div>		
									</div>
									</div>
									<div class="col-xs-12">
											<div class="row">
											<div class=" form-group col-sm-6">
												<label>Code postal</label>
												<input required name="postal_code"class="form-control margin-bottom-20" type="text">
											</div>
											<div class="form-group  col-sm-6">
												<label>Téléphonne</label>
												<input required name="phone"class="form-control margin-bottom-20" type="text">
											</div>		
									</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group ">
										<!-- Bouton file avatar -->
												<label  class="btn btn-default btn-file">
												<input name="avatar" type="file" class="form-control margin-bottom-20"  style="display: none;">
												</label>
										</div>
							
									<center>
									<!-- Bouton envoyer formulaire -->
									<input class="btn btn-default" type="submit" name="register" value="valider">
									</center>
										<div class=" col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
													<div id="contentAvatar" style="padding:0px!mportant;">
													</div>
										</div>
									</div>
								</div><!-- fin row -->
							
                            </form><!-- fin form enregistrer un compte -->
                        </div><!-- col -->
                        <!-- End Register Box -->
                    </div>
                </div><!-- container -->
            </div><!-- content -->
            <!-- === END CONTENT === -->
		