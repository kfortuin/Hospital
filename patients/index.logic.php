<?php
	
	require '../common/connect.php';

	$query = "	SELECT patient.id, patient.name as patient, species.name as species, patient.status, client.name as client 
				FROM patient 
				LEFT JOIN species 
				ON species.id=patient.species_id
				LEFT JOIN client 
				ON client.id=patient.client_id;";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);

	// $query = "SELECT client.name as clientName FROM client 
	// INNER JOIN patient ON  patient.client_id=client.id;";
	// $result = $db->query($query);

	// $client = $result->fetch_all(MYSQLI_ASSOC);
?>