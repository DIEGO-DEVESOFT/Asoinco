<table id="example" class="display nowrap" style="width:100%">
<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a><br><hr>

	<thead>
	
		<tr>
			<th>Código Rol</th>
			<th>Nombre Rol</th>
			
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($roles as $rol): ?>
		<tr>
			<td><?php echo $rol->getRolCode(); ?></td>
			<td><?php echo $rol->getRolName(); ?></td>
			
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
	
	<tfoot>
		<tr>
            <th>Código Rol</th>
			<th>Nombre Rol</th>
			
			
		</tr>
	</tfoot>
</table>





