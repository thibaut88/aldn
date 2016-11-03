<?php
$conn = mysqli_connect('localhost','admin','admin','aldn2');
mysqli_set_charset($conn, "utf8");
if(isset($_GET['motclef'])){
	$motclef = $_GET['motclef'];
	$q = array('motclef'=>$motclef.'%');
	$sql = "SELECT * FROM villes WHERE ville_nom_reel like '".$motclef."%'";
	$autocomplete = array();
	if ($res = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($res)>0){
			while($row = mysqli_fetch_assoc($res)){
		echo "<a onclick='addComplete('".$row['ville_nom_reel']."');' alt=''title=''>".ucfirst($row['ville_nom_reel'])."</a>";
		$autocomplete[] = $row['ville_nom_reel'];
	}
	}else{
		echo "aucun résultat :".$motclef;
	}
		}
	
mysqli_close($conn);

}


?>
