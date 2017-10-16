<?php
    require_once ("xampp/dbconn.php");
    require_once  ("xampp/dogs.php");
	include_once ("xampp/Header.php");
	$db = dbconn();
	echo getDogsAsTable($db);
	var_dump( getDogsAsTable($db));
	include_once ("xampp/Footer.php");
	?>