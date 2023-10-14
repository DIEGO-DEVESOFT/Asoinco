<!-- Vista de iniciar sesion -->
<div class="card-group letra1 ">
    <div class="card centrar bg-light">

        <div class="card-body">
            <!-- <h5 class="card-title letra3 padin1">DIEGO SEBASTIAN PINZÓN GONZALEZ</h5> -->
            <p class="card-text letra3 padin1"><?php echo "" . $user->getRolName();?><br>
            <?php echo "" . $user->getUserName()?>&nbsp;<?php echo "" . $user->getUserLastName(); ?>
            
        </p>
            <a href="?c=Logout">
                <i class="fas fa-power-off"></i>
            </a>
        </div>
    </div>
    <div class="card">
        
        <div class="card-body bg-light">
            
            <p class="letra3">El Sistema de Información fue creado con el fin de Gestionar los Procesos y dar Cumplimiento a las Actividades de una manera más práctica y sencilla.</p>
            <p class="letra3">
                Para cualquier inquietud comunícate con El Equipo De Soporte al Correo Electrónico soporte@asoinco.com
            </p>
        </div>
    </div>

    <div class="card-group">
        <div class="card">
            <div class="card-body bg-light">
                <h5 class="card-title centrar mod letra4"><b>Gestión de Procesos</b></h5>
                <div class="card-group bg-light">
                    <div class="card">
                        <div class="card-body bg-light">

                            <h5 class="card-title centrar letra3 "><b>CALIDAD HUMANA</b></h5>

                            

                            <!-- Página para registrar beneficiarios y mirarlos en la lista -->
                            

                            <a href="?c=Roles&a=registrarRoles" class="btn btn-secondary padin1">CREAR ROL</a>

                            <a href="?c=Roles&a=consultarRoles" class="btn btn-secondary padin1"> LISTA DE ROLES</a>
                            <a href="?c=Users&a=registrarUsuarios" class="btn btn-primary padin1"> CREAR USUARIO</a>
                            <!-- <a href="?c=users&a=consultarUsuarios" class="btn btn-primary"> Lista De Usuarios</a> -->
                            <a href="?c=Users&a=consultarUsuarios" class="btn btn-primary padin1"> LISTA DE USUARIOS</a>

                            <a href="?c=Users&a=consultarAspirante" class="btn btn-primary padin1">LISTA ASPIRANTES</a>

                            <a href="?c=Users&a=consultarBeneficiario" class="btn btn-primary padin1">LISTA BENEFICIARIOS</a>

                            <a href="?c=FacturasControllers&a=consultarFacturasControllersNuevoChileReporte" class="btn btn-success padin1">LISTA FACTURAS NUEVO CHILE</a>

                            <a href="?c=FacturasControllers&a=consultarFacturasControllersSemillasReporte" class="btn btn-success padin1">LISTA FACTURAS SEMILLAS</a>

                            <a href="?c=FacturasControllers&a=consultarFacturasControllersBuenavistaReporte" class="btn btn-success padin1">LISTA FACTURAS BUENAVISTA</a>

                            <a href="?c=FacturasControllers&a=consultarFacturasControllersSantaCeciliaReporte" class="btn btn-success padin1">LISTA FACTURAS SANTA CECILIA</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-light">

                            <h5 class="card-title centrar inv1 letra3"><b>INVENTARIO</b></h5>

                            <a href="?c=Categorias&a=registrarCategorias" class="btn btn-info padin1">REGISTRAR CATEGORIA</a>

                            <a href="?c=Categorias&a=consultarCategoria" class="btn btn-info padin1">CONSULTAR CATEGORIA</a>

                            <a href="?c=Productos&a=registrarProductos" class="btn btn-dark padin1">REGISTRAR PRODUCTOS</a>

                            <a href="?c=Productos&a=consultarProducto" class="btn btn-dark padin1">CONSULTAR PRODUCTOS</a>

                            <a href="?c=FacturasControllers&a=registrarFacturasControllers" class="btn btn-success padin1">REGISTRAR FACTURA</a>

                            <a href="?c=FacturasControllers&a=consultarFacturasControllers" class="btn btn-success padin1">CONSULTAR FACTURAS</a>

                            
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title centrar letra3"><b>INFORMES</b></h5>

                            <a href="?c=Roles&a=consultarRolesReporte" class="btn btn-secondary padin1">ROLES REGISTRADOS</a>

                            <a href="?c=Users&a=consultarEmpleados" class="btn btn-primary padin1">USUARIOS REGISTRADOS</a>

                            <a href="?c=Productos&a=consultarProductoReporte" class="btn btn-dark padin1">PRODUCTOS REGISTRADOS</a>

                            <a href="?c=Categorias&a=consultarCategoriasReporte" class="btn btn-info padin1">CATEGORIAS REGISTRADAS</a>

                            <a href="?c=FacturasControllers&a=consultarFacturasControllersReporte" class="btn btn-success padin1">FACTURAS REGISTRADAS</a>

                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>