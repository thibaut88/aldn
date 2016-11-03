<?php
// A FINIR
// user_pseudo , user_pass , user_cpass , user_addresse , user_city , user_cp , user_email ,user_firstname , user_lastname
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "aldn2";

// Create connection
$bdd = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
?>
<?php

if (!$bdd){
    die("Connection false: " . mysqli_connect_error());
}

$adduser = "INSERT INTO `users` (`name`, `firstname`, `pseudo`, `password`, `c_password`, `adresse_mail`, `adresse`, `phone`, `is_admin`, `is_active_mail`, `is_gold`, `adress_ip`, `ville`, `code_postal`) VALUES ('".$user_lastname."','".$user_firstname."','".$user_pseudo."','".$user_pass."','".$user_cpass."','".$user_email."','".$user_addresse."','0659358781',0,0,0,127.001,'".$user_city."',".$user_cp.")";

if(mysqli_query($bdd, $adduser)){
	session_start();
		$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Users/AddUserIsOk';
		 header("Location:$location");
} else {
		$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Users/AddUserIsFalse';
		 header("Location:$location");

    echo 'erreur: '. $adduser .'<br>'.mysqli_error($bdd);
}
mysqli_close($bdd);
?>