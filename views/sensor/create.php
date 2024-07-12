
<form class="row g-3" action='index.php?c=sensor&a=store' method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">numserie</label>
        <input type="number" class="form-control" name="numserie">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">designacao</label>
        <input type="text" class="form-control" name="designacao">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Estufa ID</label>
        <select name="greenhouse_id"> <?php foreach ($greenhouses as $greenhouse) { ?>
                <option value="<?= $greenhouse->id ?>"><?= $greenhouse->designacao; ?></option> <?php } ?>
        </select><br>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Criar</button>
    </div>
    <div class="col-auto">
        <a href="index.php?c=sensor&a=index" class="btn btn-warning" role="button">Voltar ao inicio</a>
    </div>
</form>
