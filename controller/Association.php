<?php
class Association extends Controller{
	public $datas;
	// public $Slider_last_offers;
	// public $Slider_last_articles;
	public $Slider_offers;
	
	function Index(){
		// INCLUS LE MODEL SLIDER_OFFERS
		require 'models/slider_offers.php';
		$this->Slider_offers=$SliderOffers->read();
		// INCLUS LE MODEL SLIDER_DERNIERS ARTICLES
		// require 'models/last_articles.php';
		// $this->Slider_last_articles=$LastArticles->read();
		// INCLUS LE MODEL DERNIERES OFFRES
		// require 'models/last_offers.php';
		// $this->Slider_last_offers=$LastOffers->read();
		//Récupère le Controlleur en cours:
		$Controller = $GLOBALS['Controller'];
		//On récupère l'url pour afficher une alerte si erreur :
		$get = $GLOBALS['parametre'];
		$displayAlerte=false;
		if ($get==="LogsOk"){$displayAlerte="LogsOk";}
		else if($get==="Redirect"){$displayAlerte="Redirect";}
		else{$displayAlerte=false;}
		//includes partials pages :
		require 'views/elements/header.php';
		require 'views/Association/Index.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('sliderHomeOffers');
		// $Controller->loadJs('sliderHomeArticles');

	}
	function Contacts(){
		//AJOUTER SCRIPT FORMULAIRE DE CONTACT
		$get = $GLOBALS['parametre'];
		$displayAlertMessageSend=false;
		$displayAlertMessageSend=($get==false)?false:true;
		$displayAlertMessageSend=($get=='sendIsOk')?true:false;
		$displayAlertMessageSend=($get=='sendIsOk')?true:false;
		//VARS
		define('phoneAvocat',"06.59.15.49.89");
		define('emailAvocat',"juridbirs@gmail.com");
		require 'views/elements/header.php';
		require 'views/Association/Contacts.php';
		require 'views/elements/footer.php';		

	}
	function Presentation(){
		require 'views/elements/header.php';
		require 'views/Association/Presentation.php';
		require 'views/elements/footer.php';
	}
	function AideExterne(){
		require 'views/elements/header.php';
		require 'views/Association/AideExterne.php';
		require 'views/elements/footer.php';
	}
	function Candidater(){
		$get = $GLOBALS['parametre'];
			$displayAlerte=false;
		if($get=="isOk"){
			$displayAlerte=true;
		}else{$displayAlerte=false;}
		require 'views/elements/header.php';
		require 'views/Association/Candidater.php';
		require 'views/elements/footer.php';
	}
	function MentionsLegales(){
		require 'views/elements/header.php';
		require 'views/Association/MentionsLegales.php';
		require 'views/elements/footer.php';
	}
	function Charte(){
		require 'views/elements/header.php';
		require 'views/Association/Charte.php';
		require 'views/elements/footer.php';
	}
}
?>