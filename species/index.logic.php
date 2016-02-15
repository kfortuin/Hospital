<?php 
	
	require '../common/connect.php';

	$query = "select * from species";
	$result = $db->query($query);

	$species = $result->fetch_all(MYSQLI_ASSOC);
	
?>