<!-- contiene el formulario -->
<div class="contenedor card centrar bg-light">
  <div class="card-group bg-light">
    <div class="card bg-light">
      <!-- Formulario de iniciar sesion -->
      <div class="card-body bg-light">
        <h5 class="card-title centrar letra1 bg-light"><b>Formulario Iniciar Sesión</b></h5>
        <div class="card-group">
          <div class="card bg-light">

            <form action="" method="POST" class="formularioiniciar">
              <div class="form-group centrar bg-light">
                <label><b>Correo Electrónico</b></label>
                <input type="email" class="form-control" name="email" placeholder="Escriba su Email" required>

              </div>
              <div class="form-group centrar">
                <label><b>Contraseña</b></label>
                <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
              </div>
              <div class="centrar">
                <input class="btn btn-success letra3" type="submit" value="Iniciar Sesión">
              </div>
              <br>
              <div class="centrar"><a href="?c=Landing&a=olvido_contraseña" role="button" aria-pressed="true">¿Olvido su
                  contraseña?</a></div>
              <div><br></div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>