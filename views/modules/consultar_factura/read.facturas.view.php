<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE FACTURAS
		<hr>
	</h3>
    <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
	<a href="?c=FacturasControllers&a=registrarFacturasControllers" class="btn btn-primary">REGISTRAR FACTURA</a><br><hr>
</div>


<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Código Factura</th>
					<th>Valor Factura</th>
					<th>Fecha Ingreso</th>
					<th>Nombre Categoria</th>
					<th>Nombre Comedor</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($facturas as $facturas): ?>
					<tr class="text-center">
						<td>
							<?php echo $facturas->getfacturas_codigo(); ?>
						</td>
						<td>
							<?php echo $facturas->getvalor_factura(); ?>
						</td>
						<td>
							<?php echo $facturas->getfecha(); ?>
						</td>
						<td>
							<?php echo $facturas->getcategoria_codigo(); ?>
						</td>
						<td>
							<?php echo $facturas->getcomedores_codigo(); ?>
						</td>
						<td>
							<a href="?c=FacturasControllers&a=actualizarFacturasControllers&facturas_codigo=<?php echo $facturas->getfacturas_codigo() ?>"
								class="btn btn-success">
								<i class="fas fa-sync-alt"></i>
							</a>
						</td>
						<td>
							<a href="?c=FacturasControllers&a=eliminarFacturasControllers&facturas_codigo=<?php echo $facturas->getfacturas_codigo() ?>"
								class="btn btn-warning">
								<i class="far fa-trash-alt"></i>
							</a>
						</td>
					</tr>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

</section>