 <!-- MODUL DE CONNECTION -->
 <div class="w3-allerta w3-hide w3-container w3-animate-right"id="logins">
<div class="w3-row">
<form  method="post"action="<?= str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/form_send_modul_logs.php';?>" class="w3-card-2 w3-col l2 w3-right">
<h2 class="w3-green w3-center w3-large w3-padding">SE CONNECTER</h2>
<p>
<label class="w3-padding-left">identifiant</label>
<input name="usr_pseudo"class="w3-input" type="text"required></p>

<p>
<label class="w3-padding-left">mot de passe</label>
<input name="usr_pwd"class="w3-input" type="password"required></p>

<button name="modulconnect"class=" w3-right w3-btn w3-btn-block w3-green">Se connecter</input>
<div class="w3-clear"></div>
</form>
</div>
</div>