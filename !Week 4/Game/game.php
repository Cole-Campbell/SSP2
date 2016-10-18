<?php
	include ('autoloader.php');
	

	$obj = new character();

	$obj->setName('Bowser');
	$obj->setGender('?');
	$obj->setWeight(200 . "kg");
	$obj->setCoins(50 . " Coins");

	echo "Character Name: " . $obj->giveName();
	echo "Character Gender: " . $obj->giveGender();
	echo "Character Weight: " . $obj->giveWeight();
	echo "Coins: " . $obj->giveCoins();

	$objKart = new kart();

	$objKart->setColour('Green');
	$objKart->setSpeed(200);
	$objKart->setWeight(200 . "kg");
	$objKart->setHandling('Good');

	echo "Kart Colour: " . $objKart->giveColour();
	echo "Kart Speed: " . $objKart->giveSpeed();
	echo "Kart Weight: " . $objKart->giveWeight();
	echo "Kart Handling: " . $objKart->giveHandling();

?>