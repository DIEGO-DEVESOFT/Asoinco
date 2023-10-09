<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR PRODUCTO
        <hr>
    </h3>
</div>

<form class="formuemple" method="POST" action="">
<fieldset>
  <div class="form-group w-60%">
    <label for="CodigoProducto">Código del Producto</label>
    <input type="text" name="productos_codigo" class="form-control"
      placeholder="(SOLO NÚMEROS)" value="<?php echo $producto->getproductos_codigo() ?>" required>
  </div>
  <div class="form-group w-60%">
    <label for="Nombre_Producto">Nombre Producto</label>
    <input type="text" name="nombre_producto" class="form-control" value="<?php echo $producto->getnombre_producto() ?>" required>
  </div><br>
  <div class="">
    <div class="form-group">
      <select class="form-control" name="categoria_codigo" required>
        <option value="" selected="" disabled="">Seleccione Categoria</option>
        <option value="1">PULPAS</option>
        <option value="2">CARNES</option>
        <option value="3">LACTEOS</option>
        <option value="4">FRUVER</option>
        <option value="5">ABARROTES</option>
        <option value="6">POLLO</option>
        
      </select>
    </div>
  </div>
  </fieldset>
  <p class="text-center" style="margin-top: 40px;">
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp;
                ACTUALIZAR</button>
    </p>
</form>
