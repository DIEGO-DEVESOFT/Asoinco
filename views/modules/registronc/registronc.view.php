<body>
    <div class="col-md-8 col-md-offset-2">
        <h3 class="centrar">FORMULARIO DE REGISTRO</h3>
        <form action="" method="post" class="form-neon" autocomplete="off">
            <fieldset>
                <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4"><br>
                            <div class="">
                                <div class="form-group">
                                    <select class="form-control" name="rolCode" required>
                                        <option value="" selected="" disabled="">Seleccione un Rol</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Proveedor</option>
                                        <option value="3">Empleado</option>
                                        <option value="4">Aspirante</option>
                                        <option value="5">Coordinador</option>
                                        <option value="6">Beneficiario</option>
                                        <option value="8">Inclusor Social</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="rolCode" class="bmd-label-floating">Código Rol</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="rolCode"
                                    id="rolCode" maxlength="20" required>
                            </div> -->
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="userCode" class="bmd-label-floating">Cédula Usuario</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="userCode"
                                    id="userCode" maxlength="20" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="userName" class="bmd-label-floating">Nombres</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="userName" id="userName" maxlength="35" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="userLastName" class="bmd-label-floating">Apellidos</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="userLastName" id="userLastName" maxlength="35" required>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            <fieldset>
                <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userEmail" class="bmd-label-floating">Email</label>
                                <input type="email" class="form-control" name="userEmail" id="userEmail" maxlength="70"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userPass" class="bmd-label-floating">Contraseña</label>
                                <input type="password" class="form-control" name="userPass" id="userPass"
                                    maxlength="200" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userPassConfirm" class="bmd-label-floating">Repetir contraseña</label>
                                <input type="password" class="form-control" name="userPassConfirm" id="userPassConfirm"
                                    maxlength="200" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="userStatus" required>
                                    <option value="" selected="" disabled="">Seleccione una opción</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <p class="text-center" style="margin-top: 40px;">
                <a type="submit" href="?c=Users&a=registrarUsuarios" class="btn bg-secondary text-white">Cancelar</a>
                <input class="btn btn-success letra3" type="submit" value="Registrar Usuario">
                <a href="?c=Users&a=consultarUsuarios" class="btn btn-primary"> Lista De Usuarios</a>
                <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
            </p>
        </form>
    </div>
</body