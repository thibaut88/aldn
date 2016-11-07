

<div   id="searchnav" class="col-xs-12 col-sm-8 col-sm-offset-2"
			style="padding-bottom:20px;
			background:rgba(250,250,250,1);
			">
					<!-- TITLE NAV -->
					<h2 style="line-height:80px!important;text-align:center"class="">Rechercher une offre</h2>
				

		<!-- DEBUT FORMULAIRE -->
		<form action="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres';?>" method="post">
		
					<div class="form-group">
					<!-- FORMULAIRE DE RECHERCHE D'UNE OFFRE -->
					<input class="form-control" type="text" 
					placeholder="<?php if(isset($_POST['nom_offre'])){echo $_POST['nom_offre'];}else{echo "Nom";};?>"
					name="nom_offre">
					</div>
					
					<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<select class="form-control" name="categorie">
						    <option value="0" disabled selected>catégorie</option>
							  <?php
							  foreach($inputtype as $key){
								  echo "<option value='".$key['id_category_offer']."'>".$key['category_name']."</option>";}
							  ?>
							</select> 
						</div><!-- GROUP -->
					</div><!-- COL 6 -->
				
					<div class="col-xs-6">
					<div class="form-group">
							<select class="form-control" name="duree">
								  <option value="default" disabled selected>durée </option>
									<?php
								  foreach($inputtimes as $key){
									  echo "<option value='".$key['id_category_time']."'>".$key['category_time_name']."</option>";}
								  ?>
							</select> 
						</div><!-- GROUP -->
					</div><!-- COL 6 -->
					</div><!-- ROW -->
					
					<div class="form-group">
				
						<center class="row">
						<p for="typeformation">avec ou sans diplôme ?</p>
						<label class=" col-xs-4"> <input class="radio" type="radio" name="diplome" value="avec" >avec</label>
						<label class=" col-xs-4"> <input class="radio" type="radio" name="diplome" value="sans">sans</label>
						<label class=" col-xs-4"> <input class="radio" type="radio" name="diplome" value="tous" >tous</label>
						</center>
					
					</div><!-- GROUP -->
					
					<div class="form-group">	
					<div class="row">	
						<div class="col-xs-12 col-sm-6">	
						<input class=" form-control"  type='text' name="ville" placeholder="ville">
						</div>					
						<div class="col-xs-12 col-sm-6">	
						<input class="  form-control"  type='number' name="code_postal" placeholder="code postal">
						</div>
					</div>
					</div>
					
					<div class="form-group">	
					<div class="row">	
						<div class="col-xs-12 col-sm-6">	
						<input class="form-control"  type='date'name="date_d" placeholder="date debut">
						</div>
						<div class="col-xs-12 col-sm-6">	
						<input class="form-control"  type='date'name="date_f" placeholder="date fin">
						</div>
					</div>
					</div>
					
					<center>
						<input class="btn btn-default btn-md" type="submit" name="send"value="Rechercher">
					</center>
			
		</form><!-- END FORM -->
		
</div><!--   #searchnava-->






