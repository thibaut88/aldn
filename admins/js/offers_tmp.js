<?php
$servername="localhost";
$username = "admin";
$password = "admin";
$dbname = "aldn2";
// Create connection
$bdd = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
?>
<?php
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM  temporary_offers";
$result = mysqli_query($bdd, $sql);

if (mysqli_num_rows($result) > 0) { ?>
<table class='w3-table w3-striped w3-centered w3-border w3-table-responsive'>
		<thead class='w3-grey'><tr>
		<td>id temporaire</td>
		<td>id categorie offre</td>
		<td>type d'offreur</td>
		<td>type de demande</td>
		<td>titre</td>
		<td>description</td>
		<td>code postal</td>
		<td>duree offre</td>
		<td>adresse</td>
		<td>pseudo</td>
		<td>email</td>
		<td>phone</td>
		<td>hide phone</td>
		<td>date d'ajout</td>
		
		</tr></thead>
<?php
$compteur_offres=0;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id_tmp_offer"]."</td>
		<td>". $row["tmp_category_offer"]."</td>
		<td>". $row["tmp_offer_type"]."</td>
		<td>". $row["tmp_offer_type_offer"]."</td>
		<td>". $row["tmp_titre_offer"]."</td>
		<td>". $row["tmp_description_offer"]."</td>
		<td>". $row["tmp_code_postal"]."</td>
		<td>". $row["tmp_duree"]."</td>
		<td>". $row["tmp_offer_addresse"]."</td>
		<td>". $row["tmp_offer_pseudo"]."</td>
		<td>". $row["tmp_offer_email"]."</td>
		<td>". $row["tmp_offer_phone"]."</td>
		<td>". $row["tmp_offer_hide_phone"]."</td>
		<td>". $row["date_ajout"]."</td></tr>";
		$compteur_offres++;
}
} else {
    echo "<p>0 resultats</p>";
	
}
echo "</table>";
echo "<p>partenaires : ".$compteur_offres." lignes</p>";
?>