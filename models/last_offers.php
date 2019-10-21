<?php
//MODEL table category_offers
//RECUPERE  LA LISTE DES CATEGORIES  D'OFFRES
class LastOffers extends Model{
	public $datas;
	public $table;
	public $sql;
	function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$lastOffers = "SELECT $fields FROM offers ORDER BY id_offer DESC LIMIT 6";
		$this->sql = $lastOffers;
		$result = mysqli_query($conn->conn,$lastOffers) or die(mysqli_error($conn->conn));
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$this->datas[] = $row;
		}
		} else {
			echo "<p>0 resultats</p>";
		}
		return $this->datas;
		}
}
$LastOffers = new LastOffers();

?>