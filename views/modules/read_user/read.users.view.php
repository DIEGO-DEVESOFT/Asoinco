<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
		<hr>
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<!-- <a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a> -->
			<a href="?c=users&a=registrarUsuarios" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> &nbsp;
				Agregar Usuario</a>
			<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
		</li>
		<br>
		<!-- <li>
						<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
						<a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
					</li> -->
	</ul>
</div>

<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Rol</th>
					<th>Código</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>EMAIL</th>
					<th>Estado</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
					<tr class="text-center">
						<td>
							<?php echo $user->getRolCode(); ?>
						</td>
						<td>
							<?php echo $user->getUserCode(); ?>
						</td>
						<td>
							<?php echo $user->getUserName(); ?>
						</td>
						<td>
							<?php echo $user->getUserLastName(); ?>
						</td>
						<td>
							<?php echo $user->getUserEmail(); ?>
						</td>
						<td>
							<?php echo $user->getUserStatus(); ?>
						</td>
						<td>
							<a href="?c=Users&a=actualizarUsuarios&codigoUser=<?php echo $user->getUserCode() ?>"
								class="btn btn-success">
								<i class="fas fa-sync-alt"></i>
							</a>
						</td>
						<td>
							<a href="?c=Users&a=eliminarUsuarios&codigoUser=<?php echo $user->getUserCode() ?>"
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
	<!-- <nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav> -->
</div>

</section>