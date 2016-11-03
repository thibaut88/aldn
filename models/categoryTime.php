<?php
//MODEL table category_time
//RECUPERE  LA LISTE DES DUREES  D'OFFRES
class CategoryTime extends Model{
	public $datas;
	public $table;
	public $sql;
	public function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$selectOfferTime = "SELECT $fields FROM category_time";
		$this->sql = $selectOfferTime;
		$resultat = mysqli_query($conn,$selectOfferTime);
		if (mysqli_num_rows($resultat) > 0) {
		while($row = mysqli_fetch_assoc($resultat)){
			$this->datas[] = $row;
		}
		} else {
			echo "<p>0 resultats</p>";
		}
		return $this->datas;
		}
}
$CategoryTime = new CategoryTime();

?>