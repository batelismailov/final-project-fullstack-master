<?php
	$dbParams = array (
	  'hostname' => 'localhost',
	  'username' => 'root',
	  'password' => '',
	  'database' => 'db1'
	);

	$mysqli = new mysqli($dbParams['hostname'], $dbParams['username'], $dbParams['password'], $dbParams['database']);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	}	
?>
