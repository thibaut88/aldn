<?php

class Partenaires extends Controller{
	//@array DATAS SQL
	public $datas;
	
 function Index(){
		
		$Controller = $GLOBALS['Controller'];
		require 'models/partenaires.php';
		$this->datas = $QueryPartenaires->readTable();
		//includes partials page :
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Partenaires/Index.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');
	}
}
