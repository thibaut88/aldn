<?php
if(!class_exists('ErrorController')){
class ErrorController extends Controller { 
	public function index(){ 
		require 'views/elements/header.php';
		require 'views/Error/Index.php';
		require 'views/elements/footer.php'; 
	}
	public function error404(){
		
	}

} }



