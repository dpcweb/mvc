<?php
// include all classess
function __autoload($class) {
	require 'libs/'.$class.'.class.php';
}

// init classess
$app = new App();
