<?php
//SUPPRIMER UNE OFFRE
session_start();
// $conn = mysqli_connect('locahost','admin','admin','aldn2');
$id_offer=$_GET['idOffer'];

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
$sql = "DELETE FROM temporary_offers WHERE id_tmp_offer = $id_offer";

if (mysqli_query($conn, $sql)) {
mysqli_close($conn);
$location = str_replace('deleteOffer.php','',$_SERVER['SCRIPT_NAME']).'../Offres/OfferDelok';
header("Location:$location");
} else {
$location = str_replace('deleteOffer.php','',$_SERVER['SCRIPT_NAME']).'../Offres/OfferDelNo';
header("Location:$location");
}



?>