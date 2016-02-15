<?php 
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
	$species = NULL;
		if (isset($_GET['id'])):
			//Get Species for id
			require '../common/connect.php';
			$id = $db->escape_string($_GET["id"]);

			$query = "select * from species where id=$id";
			$result = $db->query($query);

			$species = $result->fetch_assoc();
		endif;
		if ($species == NULL):
			// No species found
			http_response_code(404);
		include("../common/not_found.php");
		exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost', 'root', '', 'hospital');

		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$species = $db->escape_string($_POST["species"]);

		// Prepare query and execute
		$query = "update species set name='$species' where id=$id";
		$result = $db->query($query);

	// Tell the browser to go back to the index page.
	header("Location: ./");
	exit();
	endif;
?>