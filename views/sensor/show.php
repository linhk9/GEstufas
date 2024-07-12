<h2 class="text-left top-space">Estufa Show</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-6">
        <table class="table" id="greenhouses_show">
            <tr>
                <th>Id</th>
                <td><?=$sensors->id?></td>
            </tr>
            <tr>
                <th>Designacao</th>
                <td><?=$sensors->designacao?></td>
            </tr>
            <tr>
                <th>tempmedia</th>
                <td><?=$sensors->tempmedia?></td>
            </tr>
            <tr>
                <th>Estufa</th>
                <td><?=$sensors->greenhouse_id?></td>
            </tr>
        </table>
    </div>
</div>
<a href="index.php?c=greenhouse&a=index" class="btn btn-info">Voltar</a>
