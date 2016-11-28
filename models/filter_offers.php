<?php
class FilterOffers extends Model{
	
	public $datas;
	public $table;
	public $sql;
	public $Errors;
	public $last_page;
	public $current_page;
	
	function read($fields='*')
	{
		$conn = $GLOBALS['conn'];
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		
		$filter = array();
		
		$addjoin=0;
		if (isset($_POST['categorie'])&&!empty($_POST['categorie'])){
			$categorie = (int) $_POST['categorie'];$filter['category_offer']=$categorie;$addjoin++;}
		if (isset($_POST['duree'])&&!empty($_POST['duree'])){
			$duree = (int) $_POST['duree'];$filter['length_offer']=$duree;$addjoin++;}
		
		if (isset($_POST['nom_offre'])&&!empty($_POST['nom_offre'])){
			$titre = $_POST['nom_offre'];$filter['titre_offer']=$titre;}
		if (isset($_POST['diplome'])&&!empty($_POST['diplome'])){
			$diplome = (int) $_POST['diplome'];
			if($diplome !==2){
				$filter['offer_diplome']=$diplome;			
			}
			}
		if (isset($_POST['ville'])&&!empty($_POST['ville'])){
			$ville = (string)$_POST['ville'];$filter['addresse_offer']=$ville;}
		if (isset($_POST['code_postal'])&&!empty($_POST['code_postal'])){
			$code_postal = (string) $_POST['code_postal'];$filter['code_postal']=$code_postal;}
		
		//RESTE LES DATES A TRAITER
		if (isset($_POST['date_d'])&&!empty($_POST['date_d'])){
			$date_d = (string) $_POST['date_d'];$filter['date_d']=$date_d;}
		if (isset($_POST['date_f'])&&!empty($_POST['date_f'])){
			$date_f =  (string) $_POST['date_f'];$filter['date_f']=$date_f;}
		
		//recupère le total d'offres
		$offers = "SELECT  COUNT(*) AS nb_offre FROM offers";
		$retour = mysqli_query($conn, $offers) or die(mysqli_error($conn));
		$donnees = mysqli_fetch_assoc($retour);
		$total_offres = $donnees['nb_offre'];
		
		// offset
		$per_page=6;
		$url_depart = $GLOBALS['parametre'];	
		
		//total des pages 
		$total_pages = ceil($total_offres/$per_page);
		$this->last_page = $total_pages;
		
		if ( $url_depart == "Offres" OR $url_depart == 1)
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
		$offers = "SELECT $fields FROM offers ";
		
		if($addjoin>0){
			$offers.=" LEFT JOIN category_time as ct ON offers.length_offer = ct.id_category_time ";
			$offers.=" LEFT JOIN category_offers as co ON offers.category_offer = co.id_category_offer ";
		}
		$AND=0;
		if (!empty($titre) OR !empty($categorie) OR !empty($duree) OR !empty($diplome) OR !empty($ville) OR !empty($code_postal)
			OR !empty($date_d) OR !empty($date_f) 
		){
		$offers.= " WHERE en_ligne = 1  " ;
		$AND ++;
		}
		$lengthFilter=count($filter);

		if($lengthFilter>0)
		{
			foreach($filter as $key=>$value)
			{
					
					if($AND!==0)
					{
					$offers.= " AND " ;
					}
					
				switch($key)
				{
				case "titre_offer":
				$offers.= " $key LIKE '%$value%' ";
				$AND++;	
				break;
				case "category_offer":
				$offers.= " $key = $value ";
				$AND++;
				break;				
				case "length_offer":
				$offers.= " $key = $value ";
				$AND++;
				break;
				case "addresse_offer":
				$offers.= " $key LIKE '%$value%' ";
				$AND++;
				break;
				case "code_postal":
				$offers.= " $key LIKE '%$value%' ";
				$AND++;
				break;				
				case "offer_diplome":
				$offers.= " $key = $value ";
				$AND++;
				break;
				case "date_d":
				$offers.= " date_ajout > $value ";
				$AND++;
				break;
				case "date_f":
				$offers.= " date_ajout < $value ";
				$AND++;
				break;
				default: 
				}
			}	
		}
		$offers.=" LIMIT   $start_from,  $per_page";
		$this->sql = $offers;
	
		$resultat = mysqli_query($conn,$offers) or die(mysqli_error($conn));
		if (mysqli_num_rows($resultat) > 0) {
		while($row = mysqli_fetch_assoc($resultat))
		{
			$this->datas[] = $row;
		}	
		$this->Errors= false;
		} else 
		{
			$this->Errors = true;
			$this->datas = null;
			$location=str_replace('index.php','',$_SERVER['SCRIPT_NAME']).'Offres/';
			header("Location:$location");
		}
		
		return $this->datas;
	}
}
		
$FilterOffers = new FilterOffers();
