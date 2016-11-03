				<script type="text/javascript">

					$(function(){
							var errors=Array();
							var counterError =0;
							var $inputs = $(':input');
							var $pass = $(':input[name=pass]');
							var $cpass = $(':input[name=cpass]');
							var $phone = $(':input[name=phone]');
							var $register = $(':input[name=register]');
										
							//input password
							$cpass.on('blur', function(){
									//si pass !== cpass
									if($cpass.val() != $pass.val()){
										 errors['pass']='<p class="errorPass"><small>les mot de passe ne correspondent pas</small></p>';
										$cpass.after(errors['pass']);
										counterError++;
									//sinon si cpass == pass
									}else if($cpass.val() == $pass.val()){
										$('p.errorPass').fadeOut().hide();
										errors['pass']=undefined;
										counterError=0;
									}
							});//blur cpass

							//envoi formulaire
							$('form').submit(function(e){
									if(counterError !== 0){
										e.preventDefault();
										for(var key in errors){
										$register.after(errors[key]);
										}
									}
							});//submit form

						
							//input phone		
							$phone.on('blur', function(){
								
									var $type = typeof($(this).val());
									var $valeur= $(this).val();
									var isint = true;
									var counterror = 0;
									
									//boucle sur la chaine phone
									for(var i =0;i<$valeur.length;i++){
										if(
										($valeur[i] == '0') ||
										($valeur[i] == '1') ||
										($valeur[i] == '2') ||
										($valeur[i] == '3') ||
										($valeur[i] == '4') ||
										($valeur[i] == '5') ||
										($valeur[i] == '6') ||
										($valeur[i] == '7') ||
										($valeur[i] == '8') ||
										($valeur[i] == '9') 
										){
											
										}else{
											counterror++;
											var isInt=false;													
										}
									}
									//Si compteur > 0 ou isint = false
									if((counterror > 0) ||( isInt == false)){
										 errors["num"] = '<p class="ErrorNum"><small>Entrez un numéro valide</small></p>';
										$phone.after(errors['num']);
										counterError++;
									}else{
										$('p.ErrorNum').fadeOut().hide();
										 errors["num"]=undefined;
										counterError=0;			
										}
							});<!-- blur phone

							
							// Script pour le bouton avatar			
							var $avatar = $( "input:file" );
							$avatar.before( "choisir une image" );
							
							$avatar.change(function (){
								var fileName = $(this).val();
								$avatar.parent().after(fileName);
								 //Liste des extensions valides
								var $extensions_valides = Array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' );
								var $indexExt = fileName.indexOf(".");
								var ext = "";
								for(var i=$indexExt+1; i<fileName.length; i++){
									ext += fileName[i];
								}
								 var ext2 = $extensions_valides.indexOf(ext);
								if (ext2 === -1) {
								  // si l'élément n'existe pas dans le tableau
								  var extError = "extension non valide !!";
								  $avatar.parent().parent().after(extError);
								  counterError++;
								}else{
								counterError=0;
								}					
							});<!-- change file -->
			
					});// END JQuery

				</script><!-- Fin script control du formulaire -->



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
									</div>
								</div><!-- fin row -->
							
                            </form><!-- fin form enregistrer un compte -->
                        </div><!-- col -->
                        <!-- End Register Box -->
                    </div>
                </div><!-- container -->
            </div><!-- content -->
            <!-- === END CONTENT === -->
		