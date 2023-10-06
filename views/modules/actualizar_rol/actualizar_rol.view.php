<!-- Page header -->
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR ROL<hr>
    </h3>
</div>
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="active" href="?c=Roles&a=registrarRoles"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ROL</a>
        </li>
        <li>
            <a href="?c=Roles&a=consultarRoles"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ROLES</a>
        </li>
    </ul>
</div>
<!--CONTENT-->
<div class="container-fluid">
    <form action="" method="post" class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="far fa-plus-square"></i> &nbsp; Información del Rol</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                    <div class="form-group">
                            <label for="item_nombre" class="bmd-label-floating">Nombre Rol:</label>
                            <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="nombreRol" id="item_nombre" maxlength="140" value="<?php echo $rol->getRolName() ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="item_nombre" class="bmd-label-floating"></label>                            
                            <input type="hidden" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="codigoRol" id="item_nombre" maxlength="140" value="<?php echo $rol->getRolCode() ?>">
                        </div>
                        
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
    </form>
</div>
