<?php

#Define a constant outside of a class named TAX_13_5
#Create a class and define a constant inside of the class named Tax_23
#Create Methods in the class to calculate
	#Lower rate of tax using constant TAX_13_5 and
	#Higher rate of tax using constant TAX_23
#Create a class object and calculate the lower and higher rates of tax for any number entered.

define ('TAX_13_5', .135);

#Test to see if constant works.
#echo TAX_13_5;

#Created Tax class with functions to calculate taxes passed in.
class Tax{
	#Variable to hold the total amount which is produced from the calculation
	public $total;
	#COnstant holding Tax of .23% for High Tax calculation
	const TAX_23 = .23;

	#LowRate function which calculates the low rate of tax from the constant declared at the top. Tax Amount is declared once the function is called.
	function lowRate($taxAmount){
		#Pointing to $total within the class and multiplying the taxamount and adding it to taxamount to produce the full amount.
		$this->total = $taxAmount * TAX_13_5 + $taxAmount;
		#Returns $total to the echo outside of the class which instantiated the class and passed the variables.
		return $this->total;
	}

	#HighRate function which calculates the high rate of tax from the constant declared at the top. Tax Amount is declared once the function is called.
	function highRate($taxAmount) {
		#Pointing to $total within the class and multiplying the taxamount and adding it to taxamount to produce the full amount.
		$this->total = $taxAmount * self::TAX_23 + $taxAmount;
		#Returns $total to the echo outside of the class which instantiated the class and passed the variables.
		return $this->total;
	}
}

#Creating new instance of Tax class, declared as $taxAmount.
$taxAmount = new Tax();

#Echo is calling the object $taxAmount the lowRate function and passing in the parameters. Once function has run, it will return the total.
echo $taxAmount->lowRate(1000);
echo "<br/>";
#Echo is calling the object $taxAmount the highRate function and passing in the parameters. Once function has run, it will return the total.
echo $taxAmount->highRate(1000);
?>