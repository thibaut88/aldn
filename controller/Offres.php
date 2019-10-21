<?php
class Offres extends Controller{
	
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

/** PAGE INDEX OFFRES **/
	function Index(){
		require 'controller/Offres/Index.php';
	}
/** PAGE Postuler **/
	function Postuler(){
		require 'controller/Offres/Postuler.php';
	}
/** DEPOSER UNE ANNONCE ***/
	function Deposer(){
		require 'controller/Offres/Deposer.php';
	}
/** VOIR LES DETAILS DE L'OFFRE **/
	function Details(){
		require 'controller/Offres/Details.php';
	}
}//End Offres
