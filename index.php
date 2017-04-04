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
	echo Validater::validateBoolean(true);
	echo "\n";
	echo Validater::validateBoolean(false);
	echo "\n";
	echo Validater::validateArray(['1', '2']);
	echo "\n";
	echo Validater::validateArray("error");
	echo "\n";

?>