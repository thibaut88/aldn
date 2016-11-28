<?php
class Articles extends Controller{
	
	public $articles;
	
	public function Index(){
		
		$displayAlertePanier=(isset($_SESSION['Auth']['id']))?false:true;
		$get = $GLOBALS['parametre'];
		$displayShouldConnect=($get==="ShouldConnect")?true:false;
		$displayAddPanier=($get==="AddPanierOk")?true:false;
		// ON RECUPERE LES ARTICLES
		require 'models/articles.php';
		$this->articles = $ArticlesModel->readTable();
		$Controller = $GLOBALS['Controller'];
		$diplay_no_result=(!empty($this->articles))?false:true;
		//Include partials page :
		require 'views/elements/header.php';
		require 'views/Articles/Index.php';
		require 'views/elements/footer.php';
	
	}
	
}

?>