

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
?>


<?php
$compteur_partenaires = 0;
$partenaires_query = "SELECT * FROM partenaires";
$partenaires = mysqli_query($conn, $partenaires_query);
if (mysqli_num_rows($partenaires) > 0) {
    // output data of each row
	
		echo "<table class='w3-table w3-striped w3-centered  w3-border w3-table-responsive '>
		<thead class='w3-grey'><tr>
		<td>id_partenaire</td>
		<td>nom</td>
		<td>image</td>
		<td>description</td>
		</tr></thead>";
    while($row = mysqli_fetch_assoc($partenaires)) {
        echo "<tr><td>" . $row["id_partenaire"]."</td>
		<td>". $row["nom"]."</td>
		<td>". $row["image"]."</td>
		<td>". $row["description"]."</td></tr>";
		$compteur_partenaires++;
}
} else {
    echo "<p>0 resultats</p>";
	
}
echo "</table>";
echo "<p>partenaires : ".$compteur_partenaires." lignes</p>";
mysqli_close($conn);
?>