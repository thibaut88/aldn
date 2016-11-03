<?php
//MODEL table category_time
//RECUPERE  LA LISTE DES DUREES  D'OFFRES
class TempOffers extends Model{
	public $datas;
	public $table;
	public $sql;
	public $Errors;
	function read($fields='*'){
		//LIRE INFOS TABLE
		$conn = $GLOBALS['conn'];
		//PAGINATION
		// $per_page = 5;
		// $get['page'] = $GLOBALS['action'];
		// if(!empty($get['page'])){
			// $page = $get['page'];
		// }else{
			// $page=1;
		// }
		//LA PAGE COMMENCE A O ET MULTIPLIE PAR PER_PAGE
		// $start_from=($page-1)*$per_page;
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$temp_offers = "SELECT $fields FROM temporary_offers ";
		$temp_offers.= " LIMIT 0, 8 ";	
		$this->sql = $temp_offers;
		$resultat = mysqli_query($conn,$temp_offers) or die(mysqli_error($conn));
		if (mysqli_num_rows($resultat) > 0) {
		while($row = mysqli_fetch_assoc($resultat)){
			$this->datas[] = $row;
		}
		$this->Errors["resultat"] = false;
		} else {
			$this->Errors["resultat"] = true;
			// $location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/';
			// header("Location:$location");
		}
		return $this->datas;

		}
}
$TempOffers = new TempOffers();

?>