<?php
//MODEL table Offers
//RECUPERE LA TABLE DES OFFRES
class OffersModel extends Model{

	public $datas;
	public $sql;
	
	public function read($fields="*"){
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT $fields FROM offers";
		$sql.=" JOIN category_time ON offers.length_offer = category_time.id_category_time ";
		$sql.=" JOIN category_offers ON offers.category_offer = category_offers.id_category_offer ";
		$this->sql = $sql;
		$req = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if (mysqli_num_rows($req) > 0) {
		while($data = mysqli_fetch_assoc($req)){
			$this->datas[] = $data;
		}
		}else
		{
			$this->datas=null;
			}
		return $this->datas;
		}
	};
$OffersModel = new OffersModel();
?>