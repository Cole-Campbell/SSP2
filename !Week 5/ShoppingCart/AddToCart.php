<?php

class AddToCart{
	public $name;
	public $id;
	public $price;	

	public function setName($name){
		$this->name = $name;
		echo $this->name;
	}
}

?>