<h2 class="text-left top-space">Sensores Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>numserie</h3></th>
            <th><h3>Designação</h3></th>
            <th><h3>Estufa</h3></th>
            <th><h3>Temperatura Media</h3></th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($sensors as $sensor) { ?>
                <tr>
                    <td><?= $sensor->id ?></td>
                    <td><?= $sensor->numserie ?></td>
                    <td><?= $sensor->designacao ?></td>
                    <td><?= $sensor->greenhouse_id?></td>
                    <td><?= $sensor->tempmedia ?></td>
                    <td>
                        <a href="index.php?c=sensor&a=show&id=<?= $sensor->id ?>" class="btn btn-info"
                           role="button">Show</a>
                        <a href="index.php?c=sensor&a=edit&id=<?= $sensor->id ?>" class="btn btn-info"
                           role="button">Editar</a>
                        <a href="index.php?c=sensor&a=delete&id=<?= $sensor->id ?>" class="btn btn-warning"
                           role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar novo sensor</h3>
        <p>
            <a href="index.php?c=sensor&a=create" class="btn btn-info" role="button">Novo</a>
        </p>
    </div>
</div>
