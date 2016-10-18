<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "html://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns ="http://www.w3.ort/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http=equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Basic PHP Page</title>
</head>

<body>
	<p>This is standard HTML.</p>

	<?php
	# Double Quotes ("") within an echo is literal, while Single Quotes ('') will parse through code, as intended.

	# Echoing text for basic tutorial
	echo("Echoing This <br/>");
	// Printing text for basic tutorial
	print("Printing This\n<br/>");

	#Variable carrying the filename location of this current file
	$file = $_SERVER['SCRIPT_FILENAME'];
	#Variable carrying the type of browser the user is currently viewing the page from, and OS
	$user = $_SERVER['HTTP_USER_AGENT'];
	#Variable carrying the Server Information including Python, Apache, PHP and OpenSSL versions
	$server = $_SERVER['SERVER_SOFTWARE'];

	echo("Current file is stored here: $file");
	echo("<br/> $user <br/>");
	echo("$server");
	?>

	<hr/>

	<?php
	$first_name = "Cole";
	$last_name = "Campbell";
	$book = "Imps!";

	echo("The book $book was written by $first_name $last_name");
	?>

	<hr/>

	<?php /*Concatenation
	This is like addition for strings, whereby characters are added to the end of the string. It is preformed using the concatenation opeprator, which is a period.*/

	#Using First & Last name variables from above.
	$author = $first_name . ' ' . $last_name;
	#Using a Constant, the colour variable will be delcared using define()
	define ('COLOUR', 'Rose Gold');

	echo("$author 's iPhone is ");
	#Constants cannot be in quotes
	print(COLOUR)

	?>
</body>
</html>