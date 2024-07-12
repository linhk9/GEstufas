<form class="row g-3" action='index.php?c=reading&a=store' method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Valor</label>
        <input type="text" class="form-control" name="valor">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sensor</label>
        <select name="sensor_id"> <?php foreach ($sensors as $sensor) { ?>
                <option value="<?= $sensor->id ?>"><?= $sensor->designacao; ?></option> <?php } ?>
        </select><br>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Periodo</label>
        <select name="periods_id"> <?php foreach ($periods as $period) { ?>
                <option value="<?= $period->id ?>"><?= $period->designacao; ?></option> <?php } ?>
        </select><br>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Criar</button>
    </div>
    <div class="col-auto">
        <a href="index.php?c=reading&a=index" class="btn btn-warning" role="button">Voltar ao inicio</a>
    </div>
</form>
