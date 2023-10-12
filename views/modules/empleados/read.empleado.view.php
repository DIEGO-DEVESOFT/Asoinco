<table id="example" class="display nowrap" style="width:100%">
<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a><br><hr>

	<thead>
	
		<tr>
			<th>Nombre Rol</th>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Estado</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo $user->getRolCode(); ?></td>
			<td><?php echo $user->getUserCode(); ?></td>
			<td><?php echo $user->getUserName(); ?></td>
			<td><?php echo $user->getUserLastName(); ?></td>
			<td><?php echo $user->getUserEmail(); ?></td>
			<td><?php echo $user->getUserStatus(); ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	
	<tfoot>
		<tr>
			<th>Name</th>
			<th>Position</th>
			<th>Office</th>
			<th>Age</th>
			<th>Start date</th>
			<th>Salary</th>
		</tr>
	</tfoot>
</table>





