
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR CATEGORIA
        <hr>
    </h3>
</div>
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="btn btn-primary" href="?c=Categorias&a=registrarCategorias"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR
            CATEGORIA</a>
            <a class="btn btn-primary" href="?c=Categorias&a=consultarCategoria"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE
            CATEGORIA</a>
        </li>
    </ul>
</div>


<div class="container-fluid">
    <form action="" method="post" class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="far fa-plus-square"></i> &nbsp; Información de la Categoria</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        
                        <div class="form-group">
                            <label for="item_nombre" class="bmd-label-floating">Nombre Categoria:</label>
                            <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control"
                                name="nombre_categoria" id="usuario_codigo" maxlength="140"
                                value="<?php echo $categoria->getnombre_categoria() ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria_codigo" class="bmd-label-floating"></label>
                            <input type="hidden" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control"
                            name="categoria_codigo" id="categoria_codigo" maxlength="140"
                            value="<?php echo $categoria->getcategoria_codigo() ?>">
                        </div>
                        <div class="form-group">
                            <label for="item_nombre" class="bmd-label-floating"></label>
                            <input type="hidden" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control"
                                name="usuario_codigo" id="usuario_codigo" maxlength="140"
                                value="<?php echo $categoria->getusuario_codigo() ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                ACTUALIZAR</button>
        </p>
    </form>
</div> 