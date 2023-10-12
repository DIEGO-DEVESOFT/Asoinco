<table id="example" class="display nowrap" style="width:100%">
<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a><br><hr>

	<thead>
	
		<tr>
			<th>Código del Producto</th>
			<th>Nombre del Producto</th>
			<th>Categoria del Producto</th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($producto as $producto): ?>
		<tr>
			<td><?php echo $producto->getproductos_codigo(); ?></td>
			<td><?php echo $producto->getnombre_producto(); ?></td>
			<td><?php echo $producto->getcategoria_codigo(); ?></td>
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
	
	<tfoot>
		<tr>
            <th>Código del Producto</th>
			<th>Nombre del Producto</th>
			<th>Categoria del Producto</th>
			
		</tr>
	</tfoot>
</table>





