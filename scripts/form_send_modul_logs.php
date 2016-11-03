<?php
//POINT D'ENTREE DU MODUL DE CONNECTION
session_start();
$_SESSION['logged'] = "default";
//VERIFIER SI LE FORMULAIRE A ETE ENVOYE DEPUIS USERS/CONNECTION 
//PUIS CONTROLLER LES DONNEES
if (!empty($_POST) && isset($_POST['modulconnect'])){
	//usr_pseudo , usr_pwd  , send

if (isset($_POST['usr_pseudo']) && !empty($_POST['usr_pseudo'])){
	$u_pseudo = $_POST['usr_pseudo'];
}else{
	$_SESSION['logged'] = false;
	$u_pseudo = "";
}
if (isset($_POST['usr_pwd']) && !empty($_POST['usr_pwd'])){
	$u_pass = $_POST['usr_pwd'];
}else{
	$_SESSION['logged'] = false;	
	$u_pass = "";

}
	//ON VERIFIE LES IDENTIFIANTS AVEC CEUX DE LA BASE DE DONNEE
	$servername = "localhost";
	$username = "admin";
	$password = "admin";
	$dbname = "aldn2";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//REQUETE POUR EVALUER LES DONNEES
	$select_user = "SELECT * FROM users";
	$result = mysqli_query($conn, $select_user);
		$redirectLogsBad=true;

	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){
		if($u_pseudo == $row['pseudo'] && $u_pass == $row['password']){
			$redirectLogsBad=false;
			$_SESSION['logged'] = true;
			$_SESSION['logged_user_id'] = $row['id_user'];
			$_SESSION['pseudo'] = $row['pseudo'];
			$_SESSION['user_id'] = $row['id_user'];
			$_SESSION['nom'] = $row['name'];
			$_SESSION['prenom'] = $row['firstname'];
			$_SESSION['email'] = $row['adresse_mail'];
			$_SESSION['is_admin'] = $row['is_admin'];
			$_SESSION['is_active_mail'] = $row['is_active_mail'];
			$_SESSION['is_gold'] = $row['is_gold'];
			$_SESSION['user_city'] = $row['ville'];
			$_SESSION['user_cp'] = $row['code_postal'];
			$_SESSION['user_date_ins'] = $row['date_inscription'];
			mysqli_close($conn);
			$location='../Association/LogsOk';
			header("Location:$location");
		}	
		else{
			$_SESSION['logged'] =  "default";
		
		}
		}
		}
			if($redirectLogsBad){
			$location='../Association/LogsNO';
			header("Location:$location");
			}
}
var_dump($u_pseudo);
var_dump($u_pass);
?>