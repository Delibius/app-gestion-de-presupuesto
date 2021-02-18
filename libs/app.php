<?php 
class App{
	function __construct(){
		$url = isset($GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
	}
}

 ?>