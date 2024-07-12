
<form class="row g-3" action='index.php?c=greenhouse&a=store' method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Designacao</label>
        <input type="text" class="form-control" name="designacao">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Area Total</label>
        <input type="number" class="form-control" name="areatotal">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Criar</button>
    </div>
    <div class="col-auto">
        <a href="index.php?c=greenhouse&a=index" class="btn btn-warning" role="button">Voltar ao inicio</a>
    </div>
</form>
