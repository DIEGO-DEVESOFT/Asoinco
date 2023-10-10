<table id="example" class="display nowrap" style="width:100%">

	<thead>
	
		<tr>
			<th>Código Factura</th>
			<th>Valor Factura</th>
            <th>Fecha Ingreso</th>
			<th>Nombre Categoria</th>
			<th>Nombre Comedor</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($facturas as $facturas): ?>
		<tr>
			<td><?php echo $facturas->getfacturas_codigo(); ?></td>
			<td><?php echo $facturas->getvalor_factura(); ?></td>
            <td><?php echo $facturas->getfecha(); ?></td>
            <td><?php echo $facturas->getcategoria_codigo(); ?></td>
            <td><?php echo $facturas->getcomedores_codigo(); ?></td>
			
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
	<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
	<tfoot>
		<tr>
            <th>Código Factura</th>
			<th>Valor Factura</th>
            <th>Fecha Ingreso</th>
			<th>Nombre Categoria</th>
			<th>Nombre Comedor</th>
			
			
		</tr>
	</tfoot>
</table>





