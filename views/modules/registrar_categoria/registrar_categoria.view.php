<body>
    <div class="col-md-8 col-md-offset-2">
        <h3 class="centrar">REGISTRO  DE CATEGORIAS</h3>
        <form action="" method="post" class="form-neon" autocomplete="off">
            <fieldset>
            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; <b>Categorias</b></legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="categoria_codigo" class="bmd-label-floating">Código Categoria</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="categoria_codigo"
                                    id="categoria_codigo" maxlength="20" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="usuario_codigo" class="bmd-label-floating">Cédula Administrador</label>
                                <input type="text"  class="form-control"
                                    name="usuario_codigo" id="usuario_codigo" maxlength="35" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="nombre_categoria" class="bmd-label-floating">NOMBRE CATEGORIA:</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="nombre_categoria" id="nombre_categoria" maxlength="35" required>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            
            <p class="text-center" style="margin-top: 40px;">
                <a type="submit" href="?c=Categorias&a=registrarCategorias" class="btn bg-secondary text-white">Cancelar</a>
                <input class="btn btn-success letra3" type="submit" value="Registrar Categoria">
                <!-- <a href="?c=Users&a=consultarUsuarios" class="btn btn-primary"> Lista De Usuarios</a> -->
                
                <a href="?c=Categorias&a=consultarCategoria" class="btn btn-primary"> Lista De Categorias</a>

                <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
                
            </p>
        </form>
    </div>
</body