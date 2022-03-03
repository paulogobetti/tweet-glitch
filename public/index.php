<?php

	require_once "../vendor/autoload.php";
	$route = new \app\route;
	echo 'Hello World';
	echo '<hr>';
	print_r($route->getUrl());

?>
