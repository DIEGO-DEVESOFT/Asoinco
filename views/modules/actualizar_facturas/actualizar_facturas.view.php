<body>
    <div class="col-md-8 col-md-offset-2">
        <h3 class="centrar">ACTUALIZAR FACTURA</h3>
        <form action="" method="post" class="form-neon" autocomplete="off">
            <fieldset>
                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; <b>Actualizar Factura</b></legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="facturas_codigo" class="bmd-label-floating">Código Factura</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="facturas_codigo" id="facturas_codigo" maxlength="20" value="<?php echo $facturas->getfacturas_codigo() ?>" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="valor_factura" class="bmd-label-floating">Valor Factura:</label>
                                <input type="number" class="form-control" name="valor_factura" id="valor_factura" maxlength="35" value="<?php echo $facturas->getvalor_factura() ?>" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="fecha" class="bmd-label-floating">Fecha Ingreso:</label>
                                <input type="date" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="fecha" id="fecha" maxlength="35" value="<?php echo $facturas->getfecha() ?>" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
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

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                            <select class="form-control" name="comedores_codigo" required>
                                    <option value="" selected="" disabled="">Seleccione Comedor</option>
                                    <option value="1">BUENA VISTA</option>
                                    <option value="2">NUEVO CHILE</option>
                                    <option value="3">SEMILLAS</option>
                                    <option value="4">SANTA CECILIA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br><br><br>

            <p class="text-center" style="margin-top: 40px;">
                <input class="btn btn-success letra3" type="submit" value="Actualizar Factura">

                <a href="?c=FacturasControllers&a=consultarFacturasControllers" class="btn btn-primary"> Lista De Facturas</a>

                <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>

            </p>
        </form>
    </div>
</body