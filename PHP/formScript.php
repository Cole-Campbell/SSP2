<!DOCTYPE html>
<html>
<head>
	<title>Form Feedback</title>
</head>
<body>
<?php #Script for taking in HTML form content and displaying
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$email = $_REQUEST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	echo strip_tags("Thank you $name, who is $age and visits his email at $email.");
} else{
	echo("$email is not a valid email!");
}
?>
</body>
</html>