<?php
	require_once "create.logic.php";
	include "../common/header.php";

	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT species.name as species, species.id as speciesID FROM species";
	$result = $db->query($query);
	
	$species = $result->fetch_all(MYSQLI_ASSOC);

	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT client.name as client, client.id as clientID, client.status as clientStatus FROM client";
	$result = $db->query($query);
	
	$client = $result->fetch_all(MYSQLI_ASSOC);

?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input autocomplete="off" type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Species:</label>
	 		<select required name="species" id="species">
	 		<option value="">Select...</option>
	 		
				<!-- Lees species naam uit en maak hier een dropdown van  -->
				<?php 
					foreach ($species as $species): 
				?> 
					<option value="<?=$species['speciesID']?>"><?=$species['species']?></option>
				<?php 
					endforeach;
				?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="name">Client:</label>
			<select required name="client" id="client">
				<option value="">Select...</option>
          		<?php 
          		foreach ($client as $client):
          		?>
					<option value="<?=$client['clientID']?>"><?=$client['client']. ": " . $client['clientStatus'] ?></option>
				<?php 
					endforeach;
				?>
			</select>
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