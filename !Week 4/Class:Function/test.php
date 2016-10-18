<?php
	#include_once ('class.php');
	require_once ('class.php');

	$obj = new HelloWorld();
	echo $obj->getProperty(); //Calls method and echos returned value
	$obj->setProperty("I changed prop1"); //Calls back to the class.php file's setProperty function and changes the value of $prop1 within the $getProperty function.
	echo $obj->getProperty();
?>