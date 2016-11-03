<?php
class SliderOffers extends Model{
	public $datas=array();
	public $sql;
	function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT $fields FROM slider_offers";
		$this->sql = $sql;
		$resultat = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if (mysqli_num_rows($resultat) > 0) {
		while($row = mysqli_fetch_assoc($resultat)){
			$this->datas[] = $row;
		}
		} else {
			echo "<p>0 resultats</p>";
		}
		return $this->datas;
		}
};
$SliderOffers= new SliderOffers();

?>