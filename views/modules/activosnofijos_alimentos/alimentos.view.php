<h1 class="letra4">REGISTRO DE PRODUCTOS<hr></h1>
<form class="formuemple" method="POST" action="">
  <div class="form-group w-60%">
    <label for="CodigoProducto">Código del Producto</label>
    <input type="text" name="productos_codigo" class="form-control"
      placeholder="(SOLO NÚMEROS)" required>
  </div>
  <div class="form-group w-60%">
    <label for="Nombre_Producto">Nombre Producto</label>
    <input type="text" name="nombre_producto" class="form-control" 
      required>
  </div><br>
  <!-- <div class="form-group">
    <label for="CategoriaCódigo">Categoria Código</label>
    <input type="text" class="form-control" name="categoria_codigo" placeholder="Ingrese la categoria" required>
  </div> -->
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
  <input class="btn btn-success letra3" type="submit" value="Ingresar Producto">
  <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
  <a href="?c=Productos&a=consultarProducto" class="btn btn-primary">Consultar Productos</a>
  <a href="?c=Categorias&a=consultarCategoria" class="btn btn-primary">Consultar Categorias</a>
</form>
<br>