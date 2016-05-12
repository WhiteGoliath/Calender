<?php
	$db = new mysqli('localhost','root','','calendar'); // Conn naar database

	$query = "select * from birthdays";
	// query uitvoeren op database
	$result = $db->query($query);
	//resultaten opslaan in result
?>