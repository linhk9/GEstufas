<form action='index.php?c=sensor&a=update&id=<?=$sensors->id?>' method="post">
    <label for="name"><b>numserie:</b></label>
    <input type="number" name="numserie" value="<?=$sensors->numserie?>">
    <p>
        <?php
        if (isset($sensors->errors))
        {
            if (is_array($sensors->errors->on('numserie')))
            {
                foreach ($sensors->errors->on('numserie') as $error)
                {
                    echo $error . '<br>';
                }
            }
            else
            {
                echo $sensors->errors->on('numserie');
            }
        }
        ?>
    </p>
    <label for="name"><b>Designacao:</b></label>
    <input type="text" name="designacao" value="<?=$sensors->designacao?>">
    <p>
        <?php
        if (isset($sensors->errors))
        {
            if (is_array($sensors->errors->on('designacao')))
            {
                foreach ($sensors->errors->on('designacao') as $error)
                {
                    echo $error . '<br>';
                }
            }
            else
            {
                echo $sensors->errors->on('designacao');
            }
        }
        ?>
    </p>
    <label for="name"><b>Estufa:</b></label>
    <select name="greenhouse_id"> <?php foreach ($greenhouses as $greenhouse) { ?>
            <option value="<?= $greenhouse->id ?>"><?= $greenhouse->designacao; ?></option> <?php } ?>
    </select><br>
    <p>
        <?php
        if (isset($sensors->errors))
        {
            if (is_array($sensors->errors->on('greenhouse_id')))
            {
                foreach ($sensors->errors->on('greenhouse_id') as $error)
                {
                    echo $error . '<br>';
                }
            }
            else
            {
                echo $sensors->errors->on('greenhouse_id');
            }
        }
        ?>
    </p>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
    </div>
    <div class="col-auto">
        <a href="index.php?c=sensors&a=index" class="btn btn-warning" role="button">Voltar ao inicio</a>
    </div>
</form>