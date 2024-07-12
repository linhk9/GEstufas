<form action='index.php?c=greenhouse&a=update&id=<?=$greenhouses->id?>' method="post">
    <label for="name"><b>Designacao:</b></label>
    <input type="text" name="designacao" value="<?=$greenhouses->designacao?>">
    <p>
        <?php
        if (isset($greenhouses->errors))
        {
            if (is_array($greenhouses->errors->on('designacao')))
            {
                foreach ($greenhouses->errors->on('designacao') as $error)
                {
                    echo $error . '<br>';
                }
            }
            else
            {
                echo $greenhouses->errors->on('designacao');
            }
        }
        ?>
    </p>
    <label for="name"><b>Area Total</b></label>
    <input type="number" name="areatotal" value="<?=$greenhouses->areatotal?>">
    <p>
        <?php
        if (isset($greenhouses->errors))
        {
            if (is_array($greenhouses->errors->on('areatotal')))
            {
                foreach ($greenhouses->errors->on('areatotal') as $error)
                {
                    echo $error . '<br>';
                }
            }
            else
            {
                echo $greenhouses->errors->on('areatotal');
            }
        }
        ?>
    </p>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
    </div>
    <div class="col-auto">
        <a href="index.php?c=greenhouse&a=index" class="btn btn-warning" role="button">Voltar ao inicio</a>
    </div>
</form>