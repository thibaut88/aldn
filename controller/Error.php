<?php
class Error extends Controller{
	
	function Index(){
		// $Controller = $GLOBALS['Controller'];
		// $Controller->loadElement('header');
		// $Controller->loadModul('logs');
		// $Controller->loadModul('register');
		// $Controller->loadJs('navbar_fixed');
		// $Controller->loadJs('dropcontact');
		require 'views/elements/header.php';
		require 'views/Error/Index.php';
		require 'views/elements/footer.php';
		// $Controller->loadModul('contactme');
		// $Controller->loadElement('footer');

	
	}
}

?>


