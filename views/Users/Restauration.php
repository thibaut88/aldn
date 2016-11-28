<?php
if($display_send_mail){
?>
	<div class="container" >
	<div class="well well-lg px-2"style="margin-top:25px;padding:15px;">
	  <strong>Succès !</strong>Un email de restauration vous a bien été envoyé.
	</div>
</div>
 <?php 
}
?>

<?php
if($display_Restauration_form){
?>
           <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-30">
                            <!-- Login Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                <form class="login-page" action="<?=WEBROOT?>scripts/restauration_pass.php" method="POST">
                                    <div class="login-header margin-bottom-30">
                                        <h2>Mot de passe perdu ?</h2>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input name="email"placeholder="Email" class="form-control" type="email" required>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="checkbox">
                                                <input name="validateRestauration" type="checkbox" >Je valide l'envoi.</label>
                                        </div>
                                        <div class="col-md-6">
                                            <button name="Restaurer" class="btn btn-primary pull-right" type="submit">Restaurer</button>
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                            <!-- End Login Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
<?php 
}
if($display_New_Pass){ 
?>
<div class="container">
	<div class="well well-lg">
	  <strong>Succès !</strong> votre mot de passe a bien été changé. Votre nouveau mot de passe est : <br><b><?=$new_pass?></b>.
	 <p> <a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>Users/Connection" target="blank" title="se connecter" alt="se connecter">Connectez- vous !</a></p>
	</div>
</div>
<?php 
} 
?>