<?php
class calculate{
	public $operator;
	public $numOne;
	public $numTwo;
	public $result;
	
	public function setNumOne($numOne){
		$this->numOne = $numOne;
		#echo $this->numOne;
	}

	public function setNumTwo($numTwo){
		$this->numTwo = $numTwo;
	}

	public function setOperator($operator){
		$this->operator = $operator;
	}

	public function setResult($result){
		$this->result = $result;
	}

	function processNums ($numOne, $operator, $numTwo){
		if ($operator == "+"){
			return $this->add_nums ($numOne, $numTwo);
		} else if ($operator == "-"){
			return $this->minus_nums ($numOne, $numTwo);
		} else if ($operator == "*"){
			return $this->times_nums ($numOne, $numTwo);
		} else if ($operator == "/"){
			return $this->divide_nums ($numOne, $numTwo);
		}
	}

	function add_nums ($numOne, $numTwo){
		return $numOne + $numTwo;
	}

	function minus_nums ($numOne, $numTwo){
		return $numOne - $numTwo;
	}

	function times_nums ($numOne, $numTwo){
		return $numOne * $numTwo;
	}

	function divide_nums ($numOne, $numTwo){
		return $numOne / $numTwo;
	}

	function giveResult(){
		return $result = $this->processNums($this->numOne, $this->operator, $this->numTwo);
	}
}
?>