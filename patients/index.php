<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['patient']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>	
				<td><?=$patient['client']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>