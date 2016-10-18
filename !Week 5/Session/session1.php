<?php
	session_start();

	$_SESSION["Imp_Session"] = "Implosion!";

	echo $_SESSION["Imp_Session"];
?>
<br/>
<a href="session2.php">Here!</a>