<h2 class="text-left top-space">Leituras Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>Valor</h3></th>
            <th><h3>Sensor</h3></th>
            <th><h3>Periodo</h3></th>
            </thead>
            <tbody>
            <?php foreach ($readings as $reading) { ?>
                <tr>
                    <td><?= $reading->id ?></td>
                    <td><?= $reading->valor ?></td>
                    <td><?= $reading->sensors_id ?></td>
                    <td><?= $reading->periods_id ?></td>
                    <td>
                        <a href="index.php?c=sensor&a=show&id=<?= $reading->id ?>" class="btn btn-info"
                           role="button">Show</a>
                        <a href="index.php?c=sensor&a=delete&id=<?= $reading->id ?>" class="btn btn-warning"
                           role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar nova Leitura</h3>
        <p>
            <a href="index.php?c=reading&a=create" class="btn btn-info" role="button">Novo</a>
        </p>
    </div>
</div>
