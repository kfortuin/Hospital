<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"):
		require '../common/connect.php';

		//Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$status = $db->escape_string($_POST["status"]);

		//Prepare query and execute
		$query = "insert into client (name, status) values ('$name', '$status')";
		$result = $db->query($query);

	// Tell the browser to go back to the index page.
	header("Location: ./");
	exit();
	endif;

?>