<!--PHP is embedded in HTML.

Comments are done as such.../*Multiline*/
//Single Line

Echo is much faster than the print function
-->
<body>
<?php echo "hello ";
echo date('Y');
echo date('<p>H:i:s jS F Y</p>'); //H:i:s jS F Y are the parameters of the function

$age = 20;
echo "<p>John is $age years old</p>"; //Single Quotes will print the string

echo '<p>John is '.$age.' years old</p>';

define ('VATRATE', 1.23);

$price = 10;
echo $price*VATRATE;

echo $_GET ["username"];
;?>
</body>

<!--


Why not use something else? Php can communicate with servers, file systems. Send emails, POST data to servers. PHP and mySQL are used to save and store user actions. PHP has to be compiled on the server, unlike HTML/CSS. AJAX does not require a page refresh.

To print out to the browser, you can use PRINT or ECHO. ECHO '<p> You can use HTML in PHP</p>'; PRINT 'A PHP statement is rendered as HTML';

PHP syntax uses 'single quotes' and semi-colon;

FUNCTIONS

Functions help to organise code and are reusable. Functions reduce the amount of clutter within the HTML itself, making it easier for other developers to navigate through the code.

Parameters and arguments can be passed throughout functions and will return a value, or output a value.

PHP has many built in functions; one being the date function.

FUNCTION MODEL

function myFunctionName ($parameters){
	Display
	return
}

date('Y');

date('H:i:s jS F Y');

LITERALS

Strings can be inclosed in 'Single Quotes' or "Double Quotes". Strings in 'Single Quotes' are literal. PHP evaluates strings in "double quotes".

$age = 20;
echo "John is $age years old" OUTPUTS John is 20 years old

If you use single quotes, you can use still display variables as long as they are outside of the quotes.

VARIABLES

A variable is a container for data. A value does not need to be assigned to a variable before using it. Variable data types can change throughout casting. PHP is weakly typed.

IDENTIFIERS

Identifiers are the names of variables. The length of them can be any length the user wishes to use. $ is used to signify identifiers. The names may use characters and underscores, but cannot start with a number.

Data Types of Identifiers are Integer, Float/Double, String, Boolean, Array, Object

--
Global $WPDB;

$names_ar = $WPDB->get_results ("
	Select * from wp_users
");
foreach($names_ar as $name){
	echo $name->first_name;
}
--

TYPE CASTING

Allows for changing variables from one thing to another as long as it is defined at before putting in a new variable.

$myNum = "10"; - String
$total = (int)$myNum + 3; - Integer

CONSTANTS

A constant is liek a variable, but it's value cannot be changed once set. Constants are defined using the define function.

SUPERGLOBALS

Superglobals are a special case. Some examples of Superglobals include $_POST, $_GET, $_COOKIE, $_SERVER

$_GET appends the information to the URL.

$_POST is sent unseen to the human eye, but can be intercepted without proper encryption.

--
<form method="GET" action="parseform.php">

<input type="text" name="username"/>
<input type="password" name="password"/>

URL Output would be: parseform.php?username=usernmae&password=password

Sending this information through PHP
	
<?php
	echo $_GET["username"];
?>

<?php
	echo $_POST["username"];
?>


-->







