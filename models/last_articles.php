<?php
//MODEL table category_offers
//RECUPERE  LA LISTE DES CATEGORIES  D'OFFRES
class LastArticles extends Model{
	public $datas;
	public $table;
	public $sql;
	function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$lastArticles = "SELECT $fields FROM articles ORDER BY id_article DESC LIMIT 6";
		$this->sql = $lastArticles;
		$result = mysqli_query($conn,$lastArticles) or die(mysqli_error($conn));
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
$LastArticles = new LastArticles();

?>