<?php
		$displayPartenaire=false;

	if(isset($_POST)&&isset($_POST['add'])){
if(!empty($_POST['nom'])){
	$addUser = "INSERT INTO partenaires (
		nom, image, description
		) VALUES ( '".$_POST['nom']."', '".$_POST['image']."',
		'".$_POST['description']."' 
		)";
	if (mysqli_query($conn, $addUser)) {
		$displayPartenaire = true;
	} else {
		$displayPartenaire = false;
	  echo "Error: " . $addUser . "<br>" . mysqli_error($conn);
	}
}		

	}
?>



<?php
	$compteurPartenaire = 0;
	$sql = "SELECT * FROM partenaires";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
	?>
		<table class='w3-small w3-table w3-striped w3-centered w3-border w3-table-responsive'>
		<thead class='w3-light-green'><tr>
		<td>id</td><td>nom</td>
		<td>image</td><td>description</td>
		<td>supprimer</td>
		<td></td>
		</tr></thead>
		
		<tr class="w3-hide w3-animate-left"id="useraddForm">
		<form action="partenaires.php"method="post">
		<td><i class="fa fa-times fa-lg w3-text-red" aria-hidden="true"></i></td>
		<td><input type="text"name="nom"></td>
		<td><input type="text"name="image"></td><td><input type="text"name="description"></td>
		<td>NULL</td>
		<td><input class="w3-btn w3-green"type="submit"name="add"value="ajouter"></td>
		</form>
		</tr>
		
		<?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id_partenaire"]."</td>
		<td>". $row["nom"]."</td>
		<td>". $row["image"]."</td>
		<td>". $row["description"]."</td>
		<td><a href='javascript:void(0)'onclick='deletePartenaire(".$row["id_partenaire"].")'>
		<i  class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
		$compteurPartenaire++;
	}
	} else { echo "<p>0 partenaire</p>"; }
	mysqli_close($conn);
	echo "</table>";
	echo "<p>Il y a ".$compteurPartenaire." partenaires</p>";
	?>
	<input id='add'type='submit'name='add'value='ajouter'class="w3-btn w3-white w3-border">
	<div class="w3-panel"id="result"></div>
		<?php
	if($displayPartenaire){
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Partenaire ajouté<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
	}
	?>
	<script type="text/javascript">
	
	function hide(elem){
		$(elem).parent().addClass('w3-hide');
		location.reload();

	}
	
	function deletePartenaire(id_partenaire){
			var data = 'id_partenaire='+id_partenaire;
				$.ajax({
				type : "GET",
				url : "../sql/remove_partenaire.php",
				data : data,
				success : function(server_response){
					$("#result").html(server_response).show();
				}
				
			});
	};
	
	var $add = $('#add');

	$add.on('click', function(){
		$('#useraddForm').toggleClass('w3-hide');
		$('#useraddForm').css('width','100px');
		$('#td').css('width','100px');
			if($(this).attr('value')=="ajouter"){
				$(this).attr('value','annuler');
				
			}else{
				$(this).attr('value','ajouter');

			}
	});

	</script>
