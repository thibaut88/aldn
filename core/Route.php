<?php
namespace Core;
class Route{
	public function __construct($methodHTTP,$url,$callback){
		$this->_methodHTTP=$methodHTTP;
		$this->_url=$url;
		$this->_callback=$callback;
	}
}