<?php
	define('BASE_PATH', dirname(__FILE__));

	include('Core/router.php');
	run();
	include('Core/dispatcher.php');
	dispatch();
	
?>