<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {
	include $className.'.php';
}

?>