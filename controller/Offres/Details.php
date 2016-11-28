<?php
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