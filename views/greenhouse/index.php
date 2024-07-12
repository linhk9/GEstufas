<h2 class="text-left top-space">Estufa Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>designacao</h3></th>
            <th><h3>areatotal</h3></th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($greenhouses as $greenhouse) { ?>
                <tr>
                    <td><?= $greenhouse->id ?></td>
                    <td><?= $greenhouse->designacao ?></td>
                    <td><?= $greenhouse->areatotal ?></td>
                    <td>
                        <a href="index.php?c=greenhouse&a=show&id=<?= $greenhouse->id ?>" class="btn btn-info"
                           role="button">Show</a>
                        <a href="index.php?c=greenhouse&a=delete&id=<?= $greenhouse->id ?>" class="btn btn-warning"
                           role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar nova estufa</h3>
        <p>
            <a href="index.php?c=greenhouse&a=create" class="btn btn-info" role="button">Novo</a>
        </p>
    </div>
</div>
