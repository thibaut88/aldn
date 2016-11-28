<?php
		//Récupère le tableau d'URL
		//Alerte delete offer
		$get = $GLOBALS['parametre'];
		$alertDeloffer =false;
		if($get == 'delOk'){
				$alertDeloffer =true;
		}elseif($get =='delNo'){
				$alertDeloffer =false;
		}
		//Model input catégorie offer
		require 'models/categoryOffer.php';
		$this->modelCategoryOffersType = $CategoryOffers->read();
		$inputtype=$this->modelCategoryOffersType;
		//Model input durée offer
		require 'models/categoryTime.php';
		$this->modelCategoryTime = $CategoryTime->read();
		$inputtimes=$this->modelCategoryTime;
		// Si form posté : require model fiter_offers.php
		if ( isset($_POST)  && !empty($_POST['Rechercher'])){
			//model require : offer filter
			require 'models/filter_offers.php';
			//variables pour la pagination
			$this->datas = $FilterOffers->read();
			$this->last_page = $FilterOffers->last_page;
			$this->current_page =  $FilterOffers->current_page;
			// GERE LES ERREURS 
			$this->Errors=$FilterOffers->Errors;
			$alertNoResult=$this->Errors;

		}else{
			// Sinon require : offers.php
			require 'models/offers.php';
			//variables pour la pagination
			$this->datas = $OffersModel->read();
			$this->last_page = $OffersModel->last_page;
			$this->current_page =  $OffersModel->current_page;
			// GERE LES ERREURS 
			$this->Errors=$OffersModel->Errors;
			$alertNoResult=$this->Errors;
		}//end post
		require 'views/elements/header.php';
		require 'views/Offres/Index.php';
		require 'views/elements/footer.php';	