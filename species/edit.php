<?php 
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit species</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$species['id']?>">
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" autocomplete="off" value="<?=$species['name']?>">
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