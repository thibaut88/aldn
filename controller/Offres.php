<?php
class Offres extends Controller{
	
	
//A FINIR TRAITER LE FORMULAIRE
//MODIFIER OFFER_TEMPORAIRES VIA ADMIN POUR OFFERS
	public $modelCategoryTime;
	public $modelCategoryOffersType;
	public $modelTempOffers;
	public $modelFilterOffres;
	public $FilterOffers;
	public $datas;
	public $Errors;
	public $offerDetail;
	public $last_page;
	public $current_page;
	public $alerteDeposer;

/** PAGE D'OFFRES **/
	function Index(){
		
		$get = $GLOBALS['parametre'];
			$alertDeloffer =false;
		if($get = 'delOk'){
			$alertDeloffer =true;
		}elseif($get ='delNo'){
			$alertDeloffer =false;
		}
		//ON RECUPERE L'INPUT CATEGORIE OFFRE
		require 'models/categoryOffer.php';
		$this->modelCategoryOffersType = $CategoryOffers->read();
		$inputtype=$this->modelCategoryOffersType;
		// ON RECUPERE L'INPUT CATEGORIE DUREE
		require 'models/categoryTime.php';
		$this->modelCategoryTime = $CategoryTime->read();
		$inputtimes=$this->modelCategoryTime;
		// SI FORMULAIRE ENVOYER 
		// ALORS REQUIRE FILTER_OFFERS.PHP
		if ( isset($_POST)  && !empty($_POST['send'])){
			//model require offer filter
			require 'models/filter_offers.php';
			$this->datas = $FilterOffers->read();
			$this->last_page = $FilterOffers->last_page;
			$this->current_page =  $FilterOffers->current_page;
			// GERE LES ERREURS 
			$this->Errors=$FilterOffers->Errors;
			$alertNoResult=$this->Errors;

		}else{
			// SINON require model offer
			require 'models/offers.php';
			//variables pour la pagination
			$this->datas = $OffersModel->read();
			$this->last_page = $OffersModel->last_page;
			$this->current_page =  $OffersModel->current_page;
			$this->Errors=$OffersModel->Errors;
			$alertNoResult=$this->Errors;
		}//end post
		require 'views/elements/header.php';
		require 'views/Offres/Index.php';
		require 'views/elements/footer.php';	
	}
	
/** PAGE Postuler **/
	function Postuler(){

		require 'views/elements/header.php';
		require 'views/Offres/Postuler.php';
		require 'views/elements/footer.php';

	}
	
/** DEPOSER UNE ANNONCE ***/
	function Deposer(){

		//controlle si l'user est connecté pour l'afficher dans les infos de l'offre
			$userInfos =false;
		if(isset($_SESSION['Auth']) && !empty($_SESSION['Auth']['id']) && !empty($_SESSION['Auth']['pseudo'])){
			$userInfos =true;
		}
		else{
			$userInfos =false;
		}
		//ON RECUPERE L'INPUT CATEGORIE OFFRE
		require 'models/categoryOffer.php';
		$this->modelCategoryOffersType = $CategoryOffers->read();
		$inputtype=$this->modelCategoryOffersType;
		// ON RECUPERE L'INPUT CATEGORIE DUREE
		require 'models/categoryTime.php';
		$this->modelCategoryTime = $CategoryTime->read();
		$inputtimes=$this->modelCategoryTime;
		// GESTION DES ALERTES 
		$Controller = $GLOBALS['Controller'];
		$get = $GLOBALS['parametre'];
		$this->alerteDeposer=null;
		if($get == "AddOfferIsOk"){
				$this->alerteDeposer="ok";
		}elseif($get == "addOfferIsFalse"){
				$this->alerteDeposer="no";
		}
		require 'views/elements/header.php';
		require 'views/Offres/Deposer.php';
		require 'views/elements/footer.php';	
		
	}
	
/** VOIR LES DETAILS DE L'OFFRE **/
	function Details(){
		
		// NUMERO DE L'OFFRE
		$offer_id = $GLOBALS['parametre'];
		// ON RECUPERE L'INPUT CATEGORIE OFFRE
		require 'models/categoryOffer.php';
		$this->modelCategoryOffersType = $CategoryOffers->read();
		$inputtype=$this->modelCategoryOffersType;
		// ON RECUPERE L'INPUT CATEGORIE DUREE
		require 'models/categoryTime.php';
		$this->modelCategoryTime = $CategoryTime->read();
		$inputtimes=$this->modelCategoryTime;
		$Controller = $GLOBALS['Controller'];
		// ON RECUPERE L'OFFRE DEMANDEE
		require 'models/showOffer.php';
		$this->offerDetail = $showOffer->lire($offer_id);
		$offer = $this->offerDetail;
		require 'views/elements/header.php';
		require 'views/Offres/Details.php';
		require 'views/elements/footer.php';	

	}
}
