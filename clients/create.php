<?php 
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Client</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>	
<?php 
	include "../common/footer.php";
	include "../common/back.php";
?>