<?php
class HelloWorld{
	public $prop1 = "I'm a class property";
	public $message = "Hello World";

#Construct runs before everything else within a file. "Hello World" will be displayed before "I'm a class property"
	public function __construct(){
		echo $this->message . '<br/>';
	}

	public function setProperty($newval){

		$this->prop1 = $newval;
	}

	public function getProperty(){
		return $this->prop1. "<br/>";
	}	

#Destruct can be useful when destroying an object once it has run. Can be used to close a database connection once content has been taken.
	public function __destruct(){
		echo 'Goodbye World<br/>';
	}
}
?>