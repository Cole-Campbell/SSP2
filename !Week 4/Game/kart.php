<?php
class kart{
	public $colour = "";
	public $speed = "";
	public $weight = "";
	public $handling = "";

	public function setColour($colour){
		$this->colour = $colour;
	}

	public function giveColour(){
		return $this->colour . "<br/>";
	}

	public function setSpeed($speed){
		$this->speed = $speed;
	}

	public function giveSpeed(){
		return $this->speed . "<br/>";
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function giveWeight(){
		return $this->weight . "<br/>";
	}

	public function setHandling($handling){
		$this->handling = $handling;
	}

	public function giveHandling(){
		return $this->handling . "<br/>";
	}
}
?>