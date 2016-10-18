<?php
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$loginPass = false;


#.length strlen
function login($username, $password){
	clean($username, $password);
	loginAttempt($username, $password);
	
}
function clean ($username, $password){
	$username = filter_var($username, FILTER_SANITIZE_STRING);
	$password = filter_var($password, FILTER_SANITIZE_STRING);
}

function loginAttempt($username, $password){
	if ($username == "user1" && $password == "pass1"){
		$loginPass = true;
	} else{
		$loginPass = false;
	}
	fork($loginPass);
}

function fork($loginPass){
	if ($loginPass === true){
		header("Location: success.html");
	} else{
		echo "string";
	}
}

login($username, $password);

?>