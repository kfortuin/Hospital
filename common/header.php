<?php
	session_start();

	if(!isset($_SESSION['id']))
	{
		header("Location: ../login.php");
	}
?>


<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hospital</title>
		<link rel="stylesheet" href="../common/main.css" type="text/css">
	</head>
	<body>