<?php
$numOne = $_REQUEST['numOne'];
$operator = $_REQUEST['operator'];
$numTwo = $_REQUEST['numTwo'];

function processNums ($numOne, $operator, $numTwo){
	if ($operator == "+"){
		return add_nums ($numOne, $numTwo);
	} else if ($operator == "-"){
		return minus_nums ($numOne, $numTwo);
	} else if ($operator == "*"){
		return times_nums ($numOne, $numTwo);
	} else if ($operator == "/"){
		return divide_nums ($numOne, $numTwo);
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

$sum = processNums($numOne, $operator, $numTwo);
echo $sum;
?>