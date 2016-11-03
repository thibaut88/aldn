<?php
class Association extends Controller{
	// public $datas;
	// public $Slider_last_offers;
	// public $Slider_last_articles;
	// public $Slider_offers;
	
	function Index(){
		// INCLUS LE MODEL SLIDER_OFFERS
		// require 'models/slider_offers.php';
		// $this->Slider_offers=$SliderOffers->read();
		// INCLUS LE MODEL SLIDER_DERNIERS ARTICLES
		// require 'models/last_articles.php';
		// $this->Slider_last_articles=$LastArticles->read();
		// INCLUS LE MODEL DERNIERES OFFRES
		// require 'models/last_offers.php';
		// $this->Slider_last_offers=$LastOffers->read();
		//Récupère le Controlleur en cours:
		$Controller = $GLOBALS['Controller'];
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		
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
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadJs('sliderHomeOffers');
		// $Controller->loadJs('sliderHomeArticles');
		// $Controller->loadModul('contactme');

	}
	function Contacts(){
		//AJOUTER SCRIPT FORMULAIRE DE CONTACT
		$Controller = $GLOBALS['Controller'];

		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
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
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');

	}
	function Presentation(){
		$Controller = $GLOBALS['Controller'];
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Association/Presentation.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
	function AideExterne(){
		$Controller = $GLOBALS['Controller'];
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Association/AideExterne.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
	function Candidater(){
		// $Controller = $GLOBALS['Controller'];
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Association/Candidater.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
	function MentionsLegales(){
		// $Controller = $GLOBALS['Controller'];
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Association/MentionsLegales.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
	function Charte(){
		// $Controller = $GLOBALS['Controller'];
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Association/Charte.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
}
?>