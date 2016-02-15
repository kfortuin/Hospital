<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		require '../common/connect.php';
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$client = $db->escape_string($_POST["client"]);
		
		// Prepare query and execute
		$query = "insert into patient (name, species_id, status, client_id) values ('$name', $species, '$status', $client)";
		// $query = "insert into patient name=$name, species_id=$species, status=$species, client_id=$client";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>