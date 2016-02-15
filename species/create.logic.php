<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"):
		require '../common/connect.php';

		//Prepare data for insertion
		// $name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);

		//Prepare query and execute
		$query = "insert into species (name) values ('$species')";
		$result = $db->query($query);

	// Tell the browser to go back to the index page.
	header("Location: ./");
	exit();
	endif;

?>