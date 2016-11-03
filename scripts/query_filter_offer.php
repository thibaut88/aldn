<?php

//A EFFACER




$bdd = $GLOBALS['conn'];
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}
//REQUETE AFFICHER LES OFFRES PAR FILTRE
$sql = "SELECT * FROM temporary_offers";
$where = " WHERE ";
$JOIN = " JOIN ";
	// if(isset($categorie)){
	// $sql.= " INNER JOIN category_offers ON temporary_offers.tmp_category_offer = category_offers.id_category_offer ";
	// $sql.= " WHERE category_offers.id_category_offer = '2'";
	// }
// if(isset($titre)){
	// $sql.= " WHERE ";
	// $sql.= "tmp_titre_offer like '%$titre%' ";
// }


//DEBUG
var_dump($_POST);var_dump($titre);var_dump($categorie);var_dump($duree);var_dump($diplome);
var_dump($ville);var_dump($code_postal);var_dump($date_d);var_dump($date_f);

$result = mysqli_query($bdd, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {?>
<div class="w3-row w3-display-container w3-margin-top" style="word-wrap:break-word;">
<div class=" w3-white w3-border w3-animate-bottom">
<img class=" w3-display-topleft w3-border" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQmb9wM9ZzGTWjWatG_efBfrVHNCQV5WDnl8T6udMQ6lrteU2G-"
style="max-width:134px;max-height:128px">
<div style="padding-left:140px">
<h3 class="w3-text-blue w3-large"><b><?= $row['tmp_titre_offer'];?></b></h3>
<p>CDD / CDI</p>
<p><?php echo "Epinal / Golbey"; ?></p>
<span class="w3-display-bottomright w3-padding-bottom w3-padding-right"><?php echo "date annonce"; ?></span>
<span class="w3-right w3-padding-bottom w3-padding-right"><a href="details_offre.php?id=<?= $row['id_tmp_offer'];?>"title="details offre">Details de l'offre</a></span>
</div>
</div><!-- DIV -->
</div><!-- ARTICLE ROW -->
<?php
}
} else {?>
<div class="w3-panel w3-white w3-card-2 w3-animate-zoom">Aucune offre ne correspond à vos recherches<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span></p></div>
<?php
}
mysqli_close($bdd);
?>

