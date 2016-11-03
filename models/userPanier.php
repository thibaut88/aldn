
<?php

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
//on recupere la variable depuis le controlleur
$userID = $user_id;
$sql = "SELECT * FROM panier where panier.id_user = $userID";
$result = mysqli_query($conn, $sql);

$res =  mysqli_fetch_assoc($result);
$userPanier = $res;
mysqli_close($conn);



?>