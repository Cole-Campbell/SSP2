<h1>Welcome to Cole's Cart!</h1>

<?php
	#Starts session for user. This will remain, by default for 24 minutes once the user has left the site.
	session_start();
	#Session ID cart is created to keep track of what items the user adds to their cart during their visit. It is created as an array so multiple product IDs can be collected. If the user goes to the cart page the IDs would check the database and retrieve the correct information for each of the items including name, image, description and price.
	$_SESSION["cart"] = array();
	#Variable which counts the number of items in Session ID cart. This function runs through the array and gives back a number depending on the items within the cart. This will always return a numeric value.
	$cartItems = count($_SESSION["cart"]);
	#Echoing a message to the user on the page saying they have X amount of items in the cart. The variable cartItems is used to display the number of products the user may have in their cart.
	echo "You have " . $cartItems . " items in your cart";
?>
<ul>
<li><a href="boxOfImps.php">Box of Imps</a></li>
<li><a href="">Single Piece of Paper</a></li>
<li><a href="">3 Highfives</a></li>
</ul>
<?php
	#Requiring the footer.php file once as it only needs to be called the one time. This file displayes the 'View Cart' and a link to the cart page which will navigate to the Cart page.
	#echo "<br/>";
	require_once('footer.php');
?>