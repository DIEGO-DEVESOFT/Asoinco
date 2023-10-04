<!-- Vista de iniciar sesion -->
<div class="card-group letra1 ">
    <div class="card centrar bg-light">
        <div class="card-body">
            <!-- <h5 class="card-title letra3 padin1">JUAN CAMILO</h5> -->
            <p class="card-text letra3 padin1">
            <?php echo "" . $user->getRolName();?><br>
            <?php echo "" . $user->getUserName()?>&nbsp;<?php echo "" . $user->getUserLastName(); ?>
        </p>
            <a href="?c=Logout">
                    <i class="fas fa-power-off"></i>
                </a>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body bg-light">
                <h5 class="card-title centrar mod letra4"><b>Gestión de Procesos</b></h5>
                <div class="card-group bg-light">
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title centrar letra3"><b>INFORME</b></h5>
                            <a href="?c=Landing&a=" class="btn btn-primary padin1">CANTIDAD DE PEDIDOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>