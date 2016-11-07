	<?php
	$conn = mysqli_connect('localhost','admin','admin','aldn2');
	mysqli_set_charset($conn, "utf8");

	if ( isset($_GET)){
		
		$motclef = $_GET['motclef'];
		
		
		$sql = "SELECT * FROM villes WHERE ville_nom_reel like '".$motclef."%'";
		
		
		if ($res = mysqli_query($conn, $sql)){
			if(mysqli_num_rows($res)>0){
				while($row = mysqli_fetch_assoc($res)){
			$retour= "<p style='padding-left:10px;'><a onclick='addComplete(this);' alt=''title=''>".ucfirst($row['ville_nom_reel'])."</a></p>";
			echo $retour;
		}
		}else{
			$retour = "aucun résultat pour : ".$motclef;
			echo $retour;
		}
			}
		
	mysqli_close($conn);

	}


	?>
