<?php

#Complete the Employee Class, the ProjectManager child class and create an Intern child class asl.
#Use public, privatem protectedm static where appropriate
#Use scope resolution (self:: and parent::) if necessary

#Employee class is created within the PHP file.
class Employee{

	#Public variables are declared for Employee class which will hold unique pieces of information everytime it is instantiated and is used by an object.

	#For Employee, we know every employee must have a name, employee identification(employee number), number of years at the company, salary/pay, and a pension.
	public $name;
	public $empNo;
	public $yearsService;
	public $salary;
	public $pension;

	#Constructor function creates a SimpleXMLElement object which contains the data which is passed along to it.
	public function __construct($name, $empNo, $yearsService, $salary) {
		//Constructor Stuff
		echo $name;
	}

	protected function clockIn ($empNo, $time = '09:00'){
		//Save to database for our records
		echo "$empNo clocked in at $time";
	}

	private function pension ($yearsService, $salary){
		$this->pension = $yearsService * $salary;
		echo $this->pension;
		#return $this->pension;
	}
}

#New class ProjectManager is created and extends from the class Employee, which is now it's parent class.
class ProjectManager extends Employee{
	
	#Constructor function is run and takes in parameters given to it. This then connects to the parent(Employee Class) constructor and passes the parameters to it.
	function __construct($name1, $empNo1, $yearsService1, $salary1){
		parent::__construct ($name1, $empNo1, $yearsService1, $salary1);
	}

	#Child function is only accessible to the child class is created. manageProject function is only available for the Project Manager class, which extends the Employee class, as only a Project Manager may manage projects.
	public function manageProject($title, $department, $endDate){

	}
}

#New class Intern is created and extends from the class Employee, which is now it's parent class.
class Intern extends Employee{
	#When content is passed in to the Intern class it is then given to the Employee class, as all Interns are Employees. The Intern Class demonstrates encapsulation as there are no functions within this class, but due to being a child class to the Employee class, when this class is instantiated and information is passed to it, the constructor function will take the parameters and place them into a SimpleXMLElement.
}

#Objects are created and classes are instantiated. Parameters are passed into each of these objects which inturn is sent to their respected classes and run through the functions associated with them.
$pensionCalculation = new Employee("Cole", 123456, 4, 30000);

$manager = new ProjectManager("Not Cole", 123345, 10, 50000);

$newIntern = new Intern("Ann", 000000, 0, 0);


?>

