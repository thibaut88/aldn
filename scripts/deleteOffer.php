<?php
//SUPPRIMER UNE OFFRE
session_start();

$id_offer= (int) $_GET['idOffer'];

require '../database.php';

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