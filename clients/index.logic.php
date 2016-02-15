<?php

	require '../common/connect.php';

	$query = "select * from client";
	$result = $db->query($query);

	$clients = $result->fetch_all(MYSQLI_ASSOC);
	
?>