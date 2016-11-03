<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		if($row['is_admin']==1){
			if(($row['pseudo']===$pseudo) && ($row['password']===$pwd)){
				$_SESSION['loggedAdmin'] = $row['id_user'];
				$_SESSION['loggedAdminPseudo'] = $row['pseudo'];
			}
		}
	}
}


?>