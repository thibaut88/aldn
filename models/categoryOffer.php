<?php
//MODEL table category_offers
//RECUPERE  LA LISTE DES CATEGORIES  D'OFFRES
class CategoryOffers extends Model{
	public $datas;
	public $table;
	public $sql;
	function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$select_offer_type = "SELECT $fields FROM category_offers";
		$this->sql = $select_offer_type;
		$result = mysqli_query($conn,$select_offer_type) or die(mysqli_error($conn));
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
$CategoryOffers = new CategoryOffers();

?>