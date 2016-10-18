<?php
define('thisConstant', 'Imps!!!');

echo thisConstant;

class MyClass{
	const VAT_RATE = 1.23;

	function __construct(){
		echo self::VAT_RATE;
	}
}

$myObj = new MyClass();

class AnotherClass{
	public static $my_static = '<br/>Crazy Static<br/>';

	function __construct(){
		echo self::$my_static;
	}
}

#Can use variable through objects
$myOtherObj = new AnotherClass();

#Cannot access Static through objects.
#echo $myOtherObj->$my_static;

echo anotherClass::$my_static;



?>