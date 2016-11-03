<?php
//MODEL table category_time
//RECUPERE  LA LISTE DES DUREES  D'OFFRES
//REQUETE AFFICHER LES OFFRES PAR FILTRE

class FilterOffers extends Model{
	public $datas;
	public $table;
	public $sql;
	public $Errors;
	
	
	function read($fields='*'){
		
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
		$filter = array();
		$addjoin=0;
		
		if (isset($_POST['nom_offre'])&&!empty($_POST['nom_offre'])){$titre = $_POST['nom_offre'];$filter['titre_offer']=$titre;}
		if (isset($_POST['categorie'])&&!empty($_POST['categorie'])){$categorie = (int) $_POST['categorie'];$filter['category_offer']=$categorie;$addjoin++;}
		if (isset($_POST['duree'])&&!empty($_POST['duree'])){$duree = (int) $_POST['duree'];$filter['length_offer']=$duree;$addjoin++;}
		if (isset($_POST['diplome'])&&!empty($_POST['diplome'])){$diplome = $_POST['diplome'];}//DIPLOME A TRAITER ET AJOUTER DANS DEPOSER OFFRES
		if (isset($_POST['ville'])&&!empty($_POST['ville'])){$ville = $_POST['ville'];$filter['addresse_offer']=$ville;}
		if (isset($_POST['code_postal'])&&!empty($_POST['code_postal'])){$code_postal = (int) $_POST['code_postal'];$filter['code_postal']=$code_postal;}
		
		//RESTE LES DATES A TRAITER
		if (isset($_POST['date_d'])&&!empty($_POST['date_d'])){$date_d = $_POST['date_d'];}
		if (isset($_POST['date_f'])&&!empty($_POST['date_f'])){$date_f = $_POST['date_f'];}
			
		// var_dump($filter);
		var_dump($_POST);

		$temp_offers = "SELECT $fields FROM offers ";
		
		if($addjoin!==0){
			$temp_offers.=" JOIN category_time as ct ON offers.length_offer = ct.id_category_time ";
			$temp_offers.=" JOIN category_offers as co ON offers.category_offer = co.id_category_offer ";
		}
		$AND=0;
		if (!empty($titre) OR !empty($categorie) OR !empty($duree) OR !empty($diplome) OR !empty($ville) OR !empty($code_postal)){
		$temp_offers.= " WHERE " ;
		}
		$lengthFilter=count($filter);

		if($lengthFilter>0){
			foreach($filter as $key=>$value){
					
					if($AND!==0){
					$temp_offers.= " AND " ;
					}
					
				switch($key){
				case "titre_offer":
				$temp_offers.= " $key LIKE '%$value%' ";
				$AND++;	
				break;
				case "category_offer":
				$temp_offers.= " $key = $value ";
				$AND++;
				break;				
				case "length_offer":
				$temp_offers.= " $key = $value ";
				$AND++;
				break;
				case "addresse_offer":
				$temp_offers.= " $key LIKE '%$value%' ";
				$AND++;
				break;
				case "code_postal":
				$temp_offers.= " $key LIKE '%$value%' ";
				$AND++;
				break;
				default: 
				}
			}	
		}
		$this->sql = $temp_offers;
		
		var_dump($this->sql);
		var_dump($this->Errors);
		
	
		$resultat = mysqli_query($conn,$temp_offers) or die(mysqli_error($conn));
		if (mysqli_num_rows($resultat) > 0) {
		while($row = mysqli_fetch_assoc($resultat)){
			$this->datas[] = $row;
		}	
		$this->Errors["resultat"] = false;
		} else {
			$this->Errors["resultat"] = true;
			$this->datas = null;
			$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/';
			header("Location:$location");
		}
		return $this->datas;

		}
	
}
$FilterOffers = new FilterOffers();

?>