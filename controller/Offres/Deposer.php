<?php
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