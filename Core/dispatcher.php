<?php

	function dispatch() {
		$module = $_GET['module'];
		
		$file = BASE_PATH . '/Public/Modules/' . $module . '.php';

		if(file_exists($file)){
			include($file);
		}
		else {
			run404();
		}
	}