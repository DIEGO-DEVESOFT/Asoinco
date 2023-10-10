<body>
    <div class="col-md-8 col-md-offset-2">
        <h3 class="centrar">REGISTRAR FACTURA</h3>
        <form action="" method="post" class="form-neon" autocomplete="off">
            <fieldset>
            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; <b>Crear Factura</b></legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="facturas_codigo" class="bmd-label-floating">Código Factura</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="facturas_codigo"
                                    id="facturas_codigo" maxlength="20" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="valor_factura" class="bmd-label-floating">Valor Factura</label>
                                <input type="text"  class="form-control"
                                    name="valor_factura" id="valor_factura" maxlength="35" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="fecha" class="bmd-label-floating">Fecha Ingreso:</label>
                                <input type="date" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="fecha" id="fecha" maxlength="35" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="categoria_codigo" class="bmd-label-floating">Seleccione Categoria:</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control"
                                    name="categoria_codigo" id="categoria_codigo" maxlength="35" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="comedores_codigo" class="bmd-label-floating">Seleccione Comedor:</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control"
                                    name="comedores_codigo" id="comedores_codigo" maxlength="35" required>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>
            
            <p class="text-center" style="margin-top: 40px;">
                <a type="submit" href="?c=FacturasControllers&a=registrarFacturasControllers" class="btn bg-secondary text-white">Cancelar</a>
                <input class="btn btn-success letra3" type="submit" value="Registrar Factura">
                
                <a href="?c=FacturasControllers&a=consultarFacturasControllers" class="btn btn-primary"> Lista De Facturas</a>

                <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
                
            </p>
        </form>
    </div>
</body