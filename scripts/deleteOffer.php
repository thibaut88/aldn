<?php
//SUPPRIMER UNE OFFRE
session_start();

$id_offer= (int) $_GET['idOffer'];

var_dump($id_offer);

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

// sql to delete a record
$sql = "DELETE FROM offers WHERE id_offer = $id_offer";

if (mysqli_query($conn, $sql)) {
mysqli_close($conn);
$location = str_replace('deleteOffer.php','',$_SERVER['SCRIPT_NAME']).'../Offres/delOk';
header("Location:$location");
} else {
$location = str_replace('deleteOffer.php','',$_SERVER['SCRIPT_NAME']).'../Offres/delNo';
header("Location:$location");
echo mysqli_error($conn);
}



?>