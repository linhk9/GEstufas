<h2 class="text-left top-space">Leitura Show</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-6">
        <table class="table" id="greenhouses_show">
            <tr>
                <th>Id</th>
                <td><?=$reading->id?></td>
            </tr>
            <tr>
                <th>valor</th>
                <td><?=$reading->valor?></td>
            </tr>
            <tr>
                <th>Sensor</th>
                <td><?=$reading->sensors_id?></td>
            </tr>
            <tr>
                <th>Periodo</th>
                <td><?=$reading->periods_id?></td>
            </tr>
        </table>
    </div>
</div>
<a href="index.php?c=reading&a=index" class="btn btn-info">Voltar</a>
