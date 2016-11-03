<?php
class Articles extends Controller{
	public $articles;
	public function Index(){
		
		$displayAlertePanier=false;
		$displayAlertePanier=(isset($_SESSION['logged_user_id']))?false:true;
		$get = $GLOBALS['parametre'];
		$displayShouldConnect=($get==="ShouldConnect")?true:false;
		$displayAddPanier=($get==="AddPanierOk")?true:false;
		
		// ON RECUPERE LES ARTICLES
		require 'models/articles.php';
		$this->articles = $ArticlesModel->readTable();
		$Controller = $GLOBALS['Controller'];
		
		//Include partials page :
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		require 'views/elements/header.php';
		require 'views/Articles/Index.php';
		require 'views/elements/footer.php';
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		// $Controller->loadModul('contactme');
	
	}
	
}

?>