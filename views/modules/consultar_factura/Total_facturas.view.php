<table id="example" class="display nowrap" style="width:100%">
    <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;

    <br>
    <hr>

    <thead>

        <tr>

            <th>Valor Total Comedores</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($facturasTotal as $facturasTotal) : ?>
            <tr class="text-center">
                
                <td>
                <?php echo $facturasTotal->getvalor_factura(); ?>

                </td>



            </tr>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>