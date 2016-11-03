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

	/** PAGE D'OFFRES **/
	function Index(){
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
		if ( !empty($_POST) && isset($_POST['send']) ){
			//model require offer filter
			require 'models/filter_offers.php';
			$this->datas = $FilterOffers->read();
			// GERE LES ERREURS 
			$errors=$FilterOffers->Errors;
			$this->Errors=$errors;
			$displayNoResult=false;
			$displayNoResult=($this->Errors["resultat"]==0)?false:true;
		}else{
			// SINON require model offer
			require 'models/offers.php';
			$this->datas = $OffersModel->read();
		}
		require 'views/elements/header.php';
		require 'views/Offres/Index.php';
		require 'views/elements/footer.php';	
	}
	function Postuler(){
		//A FAIRE
		// A FINIR
		// require 'views/elements/header.php';
		// require 'views/moduls/logs.php';
		// require 'views/moduls/register.php';
		require 'views/elements/header.php';
		require 'views/Offres/Postuler.php';
		require 'views/elements/footer.php';
		// require 'views/Offres/Postuler.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
	
	/** DEPOSER UNE ANNONCE ***/
	
	function Deposer(){
		
		//ON RECUPERE L'INPUT CATEGORIE OFFRE
		// require 'models/categoryOffer.php';
		// $this->modelCategoryOffersType = $CategoryOffers->read();
		// $inputtype=$this->modelCategoryOffersType;
		// ON RECUPERE L'INPUT CATEGORIE DUREE
		// require 'models/categoryTime.php';
		// $this->modelCategoryTime = $CategoryTime->read();
		// $inputtimes=$this->modelCategoryTime;
		// GESTION DES ALERTES 
		$Controller = $GLOBALS['Controller'];
		$get = $GLOBALS['parametre'];
		$displayAlerte=($get===false)?false:false;
		$displayAlerte=($get==="AddOfferIsOk")?"AddOfferIsOk":false;
		$displayAlerte=($get==="addOfferIsFalse")?"addOfferIsFalse":false;
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Offres/Deposer.php';
		require 'views/elements/footer.php';	
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
		
		
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

		require 'models/showOffer.php';
		$this->offerDetail = $showOffer->lire($offer_id);
		$offer = $this->offerDetail;
		require 'views/elements/header.php';
		require 'views/Offres/Details.php';
		require 'views/elements/footer.php';	

	}
}
