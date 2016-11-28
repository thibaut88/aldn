<?php
class OffersModel extends Model{

	public $datas;
	public $sql;
	public $last_page;
	public $current_page;
	public $Errors;
	
	public function read($fields="*"){
		
		//conn
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
						
		//recupère le total d'offres
		$offers = "SELECT  COUNT(*) AS nb_offre FROM offers WHERE en_ligne = 1";
		$retour = mysqli_query($conn, $offers) or die(mysqli_error($conn));
		$donnees = mysqli_fetch_assoc($retour);
		$total_offres = $donnees['nb_offre'];
		// offset
		$per_page=6;
		
		$get = $GLOBALS['param'];
		$url_depart = (empty($get[1]))?1:$get[1];
			if($url_depart=='delOk' OR $url_depart=='delNo'){
				$url_depart= (int) 1;
			}
		//total des pages 
		$total_pages = ceil($total_offres/$per_page);
		$this->last_page = $total_pages;
		
		
		if ( $url_depart == "Offres" OR $url_depart == 1 OR empty($url_depart))
		{
				// première visite page 1
				$page=1;
				$this->current_page = $page;
				// limite depart
				$start_from = ($page-1)*$per_page; // LIMIT 0, 6
		}
		else
		{
				//page demandée
				$page=$url_depart;
				$this->current_page = $page;
				// limite depart
				$start_from = ($page-1)*$per_page; // LIMIT 0, 6				

		}

		
		//QUERY 
		$sql = "SELECT $fields FROM offers";
		$sql.=" LEFT  JOIN category_time ON offers.length_offer = category_time.id_category_time ";
		$sql.=" LEFT JOIN category_offers ON offers.category_offer = category_offers.id_category_offer ";
		$sql.=" WHERE en_ligne = 1  ";
		$sql.=" LIMIT  $start_from,  $per_page";
		$this->sql = $sql;

		
		//SEND QUERY
		$req = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		//RECUP DES OFFRES
		if (mysqli_num_rows($req) > 0) {
		while($data = mysqli_fetch_assoc($req)){
			$this->datas[] = $data;
		}
		$this->Errors=false;
		}else
		{
			$this->datas=null;
			$this->Errors=true;
		}
		return $this->datas;

	}
		
};
$OffersModel = new OffersModel();
?>