<?php
class Association extends Controller{

	public $slider_offers;
	
	function index(){
 		$this->loadModel('slider_offers');
  		$sliderOffers= new SliderOffers();   
  		$this->slider_offers=$sliderOffers->read();
		//Récupère le Controlleur en cours:
		$Controller = $GLOBALS['controller'];
		//get url 
		$get = $GLOBALS['parametre'];
		$displayAlerte=false;
		if ($get==="LogsOk"){$displayAlerte="LogsOk";}
		else if($get==="Redirect"){$displayAlerte="Redirect";}
		else{$displayAlerte=false;}
		//pages
		require 'views/elements/header.php';
		require 'views/Association/Index.php';
		require 'views/elements/footer.php';

	}
	function contacts(){
		//AJOUTER SCRIPT FORMULAIRE DE CONTACT
		$get = $GLOBALS['parametre'];
		$displayAlertMessageSend=false;
		$displayAlertMessageSend=($get==false)?false:true;
		$displayAlertMessageSend=($get=='sendIsOk')?true:false;
		$displayAlertMessageSend=($get=='sendIsOk')?true:false;
		//VARS
		define('phoneAvocat',"06.00.00.00.00");
		define('emailAvocat',"avocatEmail@domain.ext");
		require 'views/elements/header.php';
		require 'views/Association/Contacts.php';
		require 'views/elements/footer.php';		

	}
	function presentation(){
		require 'views/elements/header.php';
		require 'views/Association/Presentation.php';
		require 'views/elements/footer.php';
	}
	function aideExterne(){
		require 'views/elements/header.php';
		require 'views/Association/AideExterne.php';
		require 'views/elements/footer.php';
	}
	function candidater(){
		$get = $GLOBALS['parametre'];
		$displayAlerte=false;
		if($get=="isOk"){
			$displayAlerte=true;
		}else{$displayAlerte=false;}
		require 'views/elements/header.php';
		require 'views/Association/Candidater.php';
		require 'views/elements/footer.php';
	}
	function mentionsLegales(){
		require 'views/elements/header.php';
		require 'views/Association/MentionsLegales.php';
		require 'views/elements/footer.php';
	}
	function charte(){
		require 'views/elements/header.php';
		require 'views/Association/Charte.php';
		require 'views/elements/footer.php';
	}
}
?>