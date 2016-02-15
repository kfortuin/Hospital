<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			require '../common/connect.php';
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT p.name AS patientName, p.id, s.id AS speciesID, p.species_id, s.name AS speciesName
			 FROM patient p
			 INNER JOIN species s
			 ON p.species_id = s.id
			 AND p.id=$id";
			$result = $db->query($query);
		
			$patient = $result->fetch_assoc();		
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','hospital');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "delete from patient where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>