<table id="example" class="display nowrap" style="width:100%">
<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="?c=FacturasControllers&a=registrarFacturasControllers" class="btn btn-primary">REGISTRAR FACTURA</a>&nbsp;&nbsp;
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasControllers" class="btn btn-primary">VALOR TOTAL FACTURAS</a>
<br><hr>

	<thead>
	
		<tr>
			<th>Código Factura</th>
			<th>Valor Factura</th>
            <th>Fecha Ingreso</th>
			<th>Nombre Categoria</th>
			<th>Nombre Comedor</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
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
			<td><a href="?c=FacturasControllers&a=actualizarFacturasControllers&facturas_codigo=<?php echo $facturas->getfacturas_codigo() ?>"
								class="btn btn-success">
								<i class="fas fa-sync-alt"></i>
							</a></td>
			<td><a href="?c=FacturasControllers&a=eliminarFacturasControllers&facturas_codigo=<?php echo $facturas->getfacturas_codigo() ?>"
								class="btn btn-warning">
								<i class="far fa-trash-alt"></i>
							</a></td>
			
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
	
	<tfoot>
		<tr>
            <th>Código Factura</th>
			<th>Valor Factura</th>
            <th>Fecha Ingreso</th>
			<th>Nombre Categoria</th>
			<th>Nombre Comedor</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
			
			
		</tr>
	</tfoot>
</table>





