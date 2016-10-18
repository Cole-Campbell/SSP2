<?php
	setcookie("Imp_Cookie", "Imps are in your computer!", time()+120, "/");
?>

<?php
	echo $_COOKIE["Imp_Cookie"];
?>

<?php
	setcookie("Imp_Cookie", "We have killed the imps. Hehehe!");
?>

<?php
	echo $_COOKIE["Imp_Cookie"];
?>

<?php
	unset($_COOKIE["Imp_Cookie"]);

	setcookie("Imp_Cookie", "Bye Bye Imps", time()-1);
?>