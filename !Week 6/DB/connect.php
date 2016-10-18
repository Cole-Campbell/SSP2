<?php
$id = 3;
$username = 'root';
$password = '';
#Try & Catch. This will try the connection and if successful it will connect.
#If the connection does not connect then it will change the error mode to exception and will send throw an error in the browser.
try{
	$conn = new PDO('mysql:host=localhost; dbname=ssp2', $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	#Prepare the query ONCE
	$stmt = $conn->prepare('INSERT INTO users VALUES(:id, :emp_id, :username, :password, :email)');
	$stmt->execute(array(
		':id' => '',
		':emp_id' => '6',
		':username' => 'Chloe',
		':password' => sha1('Evil'),
		':email' => 'chloe@gmail.com'));

	/*$stmt->bindParam(':id', $id);
	$stmt->bindParam(':emp_id', $emp_id);
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':email', $email);*/

	#First Insertion
	/*
	$id = '';
	$emp_id = 5;
	$username = 'Steven';
	$password = sha1('passWorth');
	$email = 'steven@gmail.com';
	$stmt->execute();
*/w

/*
	$stmt = $conn->prepare('SELECT * FROM employees WHERE id = :id');
	$stmt->execute(array('id'=>$id));

	while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
	#while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo '<pre>';
		print_r($row);
		echo '</pre>';
	}
	*/
} catch(PDOEception $e) {
	echo 'ERROR: ' . $e->getMessage(); 
}

#Basic database connection. Typically put dtabase connection in seperate PHP file, but not in root file.
#$conn = new PDO('mysql:host=localhost; dbname=ssp2', $username, $password);
?>