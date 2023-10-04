<body>
  <div class="col-md-8 col-md-offset-2">
    <h3 class="centrar">REGISTRO EMPLEADO</h3>
    <form action="" method="post" class="form-neon" autocomplete="off">
      <fieldset>
        <legend><i class="far fa-address-card"></i> &nbsp; Información Personal del Empleado</legend>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-4"><br>

              <div class="form-group">
                  <div class="form-group">
                    <select class="form-control" name="rolCodeEmpleado" required>
                      <option value="" selected="" disabled="">Seleccione Rol</option>
                      <option value="6">Empleado</option>
                      
                    </select>
                  </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="empleado_codigo" class="bmd-label-floating">Cédula Empleado</label>
                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="empleado_codigo" id="empleado_codigo"
                  maxlength="20" required>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="nombre_empleado" class="bmd-label-floating">Nombres</label>
                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="nombre_empleado"
                  id="userName" maxlength="35" required>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="apellido_empleado" class="bmd-label-floating">Apellidos</label>
                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="apellido_empleado"
                  id="apellido_empleado" maxlength="35" required>
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
                <input type="email" class="form-control" name="empleado_Email" id="userEmail" maxlength="70" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <select class="form-control" name="empleado_Status" required>
                  <option value="" selected="" disabled="">Seleccione una opción</option>
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
              </div>
            </div>
          </div>
      </fieldset>
      <p class="text-center" style="margin-top: 40px;">

        <a type="submit" href="?c=Empleado&a=registrarEmpleado" class="btn bg-secondary text-white">Cancelar</a>

        <input class="btn btn-success letra3" type="submit" value="Registrar Empleado">
        <a href="?c=Empleado&a=consultarEmpleado" class="btn btn-primary"> Lista De Empleados</a>


        <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
      </p>
    </form>
  </div>
</body