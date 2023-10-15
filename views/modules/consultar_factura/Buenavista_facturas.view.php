<table id="example" class="display nowrap" style="width:100%">
<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>&nbsp;
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasPulpasBuenavistaControllers" class="btn btn-success">VALOR TOTAL PULPAS</a>&nbsp;
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasAbarrotesBuenavistaControllers" class="btn btn-success">VALOR TOTAL ABARROTES</a>&nbsp;
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasFruverBuenavistaControllers" class="btn btn-success">VALOR TOTAL FRUVER</a>&nbsp;
<hr>
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasCarnesBuenavistaControllers" class="btn btn-success">VALOR TOTAL CARNES</a>&nbsp;
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasLacteosBuenavistaControllers" class="btn btn-success">VALOR TOTAL LACTEOS</a>&nbsp;
<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasPolloBuenavistaControllers" class="btn btn-success">VALOR TOTAL POLLO</a>&nbsp;
<br>
<hr>

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





