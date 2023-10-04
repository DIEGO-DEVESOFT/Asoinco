<div class="full-box page-header">
     <h3 class="text-left">
         <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ROLES<hr>
     </h3>
 </div>
 <div class="container-fluid">
     <ul class="full-box list-unstyled page-nav-tabs">
         <li>
             <a href="?c=Roles&a=registrarRoles" class="btn btn-primary"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Rol</a>
             <a type="submit" href="?c=Dashboard" class="btn bg-secondary text-white">Atrás</a>
         </li>
         <br>
     </ul>
 </div>
 <!--CONTENT-->
 <div class="container-fluid">
     <div class="table-responsive">
         <table class="table table-dark table-sm">
             <thead>
                 <tr class="text-center roboto-medium">
                     <th>CÓDIGO ROL</th>
                     <th>NOMBRE ROL</th>
                     <th>ACTUALIZAR</th>
                     <th>ELIMINAR</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($roles as $rol) : ?>
                     <tr class="text-center">
                         <td><?php echo $rol->getRolCode(); ?></td>
                         <td><?php echo $rol->getRolName(); ?></td>
                         <td>
                             <a href="?c=Roles&a=actualizarRoles&codigoRol=<?php echo $rol->getRolCode() ?>" class="btn btn-success">
                                 <i class="fas fa-sync-alt"></i>
                             </a>
                         </td>
                         <td>
                             <a href="?c=Roles&a=eliminarRoles&codigoRol=<?php echo $rol->getRolCode() ?>" class="btn btn-warning">
                                 <i class="far fa-trash-alt"></i>
                             </a>                             
                         </td>
                     </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>
 </div>
