<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Species</th>
				<th></th>
				<th></th>
			</tr>
		</thead>	
		<tbody>
<?php 
	foreach ($species as $species):
?>
		<tr>
			<td><?=$species['name']?></td>	
			<td class="center"><a href="edit.php?id=<?=$species['id']?>">edit</a></td>
			<td class="center"><a href="delete.php?id=<?=$species['id']?>">delete</a></td>
		</tr>
<?php 
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>