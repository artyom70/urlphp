<?php
	function run() {
		$uri = $_SERVER['REQUEST_URI'];
		$regexp = '/^\/([A-Za-z0-9_-]+)\/?([A-Za-z0-9_-]+)?\/?([A-Za-z0-9_-]+)?\/?$/i';
		
		$match = preg_match($regexp, $uri, $matches);
		
		if($match != false) {
			array_shift($matches);
			array_shift($matches);
			if(!empty($matches)) {
				$module = strtolower($matches[0]);
			}
			else {
				$module = 'home';
			}
			
			$_GET['module'] = $module;
		}
		else {
			run404();
		}
	}
	
	function run404(){
		header("HTTP/1.0 404 Not Found");
		echo '404';
	}
?>