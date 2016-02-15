<?php 
	session_start();

	if(isset($_POST['login']))
	{
		require 'common/connect.php';

		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);

		$username = stripslashes($username);
		$password = stripslashes($password);

		$username = mysqli_real_escape_string($db, $username);
		$password = mysqli_real_escape_string($db, $password);

		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$result = mysqli_query($db, $sql);

		$row = mysqli_fetch_array($result);
		$id = $row['id'];
		$db_password = $row['password'];

		if($password == $db_password)
		{
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $id;
			header('Location: index.php');
		} else {
			echo "Wrong username or password";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<label>Username:</label>
		<input type="text" name="username" value="" placeholder="Username" autocomplete="off">

		<label>Password:</label>
		<input type="password" name="password" value="" placeholder="Password" autocomplete="off">

		<input type="submit" name="login" value="Log In">
	</form>
</body>
</html>