<?php
	$db = new mysqli('localhost','root','','calendar'); // Conn naar database

	$query = "select * from birthdays
	ORDER BY month, day, person";


	// query uitvoeren op database
	$result = $db->query($query);
	//resultaten opslaan in result
	$months = array(
		1 => "januari",
		2 => "februari",
		3 => "maart",
		4 => "april",
		5 => "mei",
		6 => "juni",
		7 => "juli",
		8 => "augustus"	,
		9 => "september",	
		10 => "oktober",
		11 => "november",
		12 => "december"
	);
        $currMonth = null;  
        $currDay = null;
?>