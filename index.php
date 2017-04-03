<?php
	require 'vendor/autoload.php';
	use aldorg\validater\Validater as Validater;
	echo Validater::validateEmail("name@example.com");
	echo "\n";
	echo Validater::validateEmail("name@exacom");
	echo "\n";
	echo Validater::validateInteger(1);
	echo "\n";
	echo Validater::validateInteger(1.1);
	echo "\n";
?>