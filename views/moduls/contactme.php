<div class="w3-bottom w3-right w3-hide w3-container w3-animate-bottom w3-allerta"id="contactModul"style="max-width:300px;">
<div class="w3-row w3-card-4  ">
<form  class="w3-col s12"method="post"action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'scripts/form_send_contact.php'?>">
<h2 class="w3-brown w3-center">Une question ?<a  onclick="closecontactmemodul();" class="w3-padding-right w3-closenav w3-right"href="javascript:void(0)">&times;</a></h2>

<p>
<label class="w3-padding-left">Prénom</label>
<input class="w3-input w3-border" type="text"name="prenom"></p>

<p>
<label class="w3-padding-left">E-mail</label>
<input class="w3-input w3-border" type="text"name="email"></p>
<p>
<label class="w3-padding-left">Votre messgage</label>
<textarea class="w3-btn-block w3-white" rows="5"name="message"></textarea>

<button class=" w3-margin w3-right w3-btn w3-green">ENVOYER</button>
<div class="w3-clear"></div>
</form>
</div>
</div>
<div class="w3-clear"></div>