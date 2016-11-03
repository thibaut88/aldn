<?php
		$displayAddok=false;

	if(isset($_POST)&&isset($_POST['ajouter'])){
if(!empty($_POST['name'])){
	$addUser = "INSERT INTO users (
		name, firstname, pseudo, password, c_password,
		adresse_mail, adresse, phone, is_admin,
		is_active_mail, is_gold, adress_ip,
		ville, code_postal, date_inscription, path_avatar 
		) VALUES ( '".$_POST['name']."', '".$_POST['firstname']."',
		'".$_POST['pseudo']."','".$_POST['password']."',
		'".$_POST['c_password']."', '".$_POST['adresse_mail']."',
		'".$_POST['adresse']."',
		'".$_POST['phone']."',
		".$_POST['is_admin'].",
		".$_POST['is_active_mail'].",
		".$_POST['is_gold'].",
		192,
		'".$_POST['ville']."',
		".$_POST['code_postal'].",
		NOW(),
		' ' )";
	if (mysqli_query($conn, $addUser)) {
		$displayAddok = true;
	} else {
		$displayAddok = false;
	  echo "Error: " . $addUser . "<br>" . mysqli_error($conn);
	}
}		

	}
?>
<?php
	$compteur_users = 0;
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
	?>
		<table class='w3-small w3-table w3-striped w3-centered w3-border w3-table-responsive'>
		<thead class='w3-light-green'><tr>
		<td>id</td><td>prénom</td>
		<td>nom</td><td>pseudo</td>
		<td>mot de passe</td><td>confirmation</td>
		<td>email</td><td>adresse</td>
		<td>télephonne</td><td>admin</td>
		<td>mail confirmation</td><td>adhérent</td>
		<td>ville</td>
		<td>code postal</td>
		<td>inscription</td>
		<td>supprimer</td>
		<td></td>
		</tr></thead>
		
		<tr class="w3-hide w3-animate-left"id="useraddForm">
		<form action="users.php"method="post">
		<td><i class="fa fa-times fa-lg w3-text-red" aria-hidden="true"></i><td><input type="text"name="name"></td>
		<td><input type="text"name="firstname"></td><td><input type="text"name="pseudo"></td>
		<td><input type="text"name="password"></td><td><input type="text"name="c_password"></td>
		<td><input type="text"name="adresse_mail"></td><td><input type="text"name="adresse"></td>
		<td><input type="text"name="phone"></td><td><input type="text"name="is_admin"></td>
		<td><input type="text"name="is_active_mail"></td><td><input type="text"name="is_gold"></td>
		<td><input type="text"name="ville"></td><td><input type="text"name="code_postal"></td>
		<td><input type="text"name="date_inscription"></td>
		<td>NULL</td>
		<td><input class="w3-btn w3-green"type="submit"name="ajouter"value="ajouter"></td>
		</form>
		</tr>
		
		<?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id_user"]."</td>
		<td>". $row["name"]."</td>
		<td>". $row["firstname"]."</td>
		<td>". $row["pseudo"]."</td>
		<td>". $row["password"]."</td>
		<td>". $row["c_password"]."</td>
		<td>". $row["adresse_mail"]."</td>
		<td>". $row["adresse"]."</td>
		<td>". $row["phone"]."</td>";
		if($row["is_active_mail"]==1){
			echo '<td><i class="fa fa-user-secret w3-text-green" aria-hidden="true"></i></td>';
		}else{
			echo '<td><i class="fa fa-user-secret w3-text-red" aria-hidden="true"></i></td>';
		}		
		if($row["is_active_mail"]==1){
			echo '<td><i class="fa fa-reply w3-text-green" aria-hidden="true"></i></td>';
		}else{
			echo '<td><i class="fa fa-reply w3-text-red" aria-hidden="true"></i></td>';
		}
		if($row['is_gold']==1){
			echo "<td><i class='w3-text-green fa fa-money' aria-hidden='true'></i></td>";
		}else{
			echo "<td><i class='w3-text-red fa fa-money' aria-hidden='true'></i></td>";
		}
		echo "<td>". $row["ville"]."</td>
		<td>". $row["code_postal"]."</td>
		<td>". $row["date_inscription"]."</td>
		<td><a href='javascript:void(0)'onclick='deleteuser(".$row["id_user"].")'>
		<i  class='fa fa-trash' aria-hidden='true'></i>
		</a></td></tr>";
		$compteur_users++;
	}
	} else { echo "<p>0 utilisateur</p>"; }
	mysqli_close($conn);
	echo "</table>";
	echo "<p>Il y a ".$compteur_users." utilisateurs</p>";
	?>
	<input id='add'type='submit'name='add'value='ajouter'class="w3-btn w3-white w3-border">
	<div class="w3-panel"id="result"></div>
	<?php
	if($displayAddok){
		$alert = '<div class="w3-allerta w3-center w3-panel w3-light-green w3-card-2">
		<p>Utilisateur ajouté<span onclick="hide(this)" class="w3-closebtn">&times;</span></p>
		</div>';
		echo $alert;
	}
	?>
	<script type="text/javascript">
	
	function hide(elem){
		$(elem).parent().addClass('w3-hide');
		location.reload();

	}
	
	function deleteuser(user){
			var data = 'idUser='+user;
				$.ajax({
				type : "GET",
				url : "../sql/remove_user.php",
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
