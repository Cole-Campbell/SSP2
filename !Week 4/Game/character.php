<?php
class character{
	public $name = "";
	public $gender = "";
	public $weight = "";
	public $coins = "";

	public function setName($name){
		$this->name = $name;
	}

	public function giveName(){
		return $this->name . "<br/>";
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function giveGender(){
		return $this->gender . "<br/>";
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function giveWeight(){
		return $this->weight . "<br/>";
	}

	public function setCoins($coins){
		$this->coins = $coins;
	}

	public function giveCoins(){
		return $this->coins . "<br/><hr/>";
	}
	
//Starting and ending messages which wrap the generated content.

	public $greeting = "Welcome to Mario Kart!<br/>";

	public function __construct(){
		echo $this->greeting . '<br/>';
	}

	public function __destruct(){
		echo '<br/>Thank you for playing!<br/>';
	}
}
?>