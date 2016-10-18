<?php
	include_once('AddToCart.php');
	session_start();
	$name = "Box O' Imps";
	$price = 1;
	
	$obj = new AddToCart();

	$obj->setName($name);

	echo "<h1></h1>
	<p>$$price</p>
	<form action='addToCart.php' method='POST'>
		<input type='submit' value='Add to Cart'>
	</form>";

?>

<?php
	require_once('footer.php');
?>