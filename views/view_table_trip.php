<?php
list($j, $g) = $models_models->get_info_2();
?>

<div class="row">
    <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                Все перездки
                <span class="badge badge-primary badge-pill"><?=$g;?></span>
            </a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Задать дату</a>
        </div>
    </div>
    <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                Данные по всем перевозкам
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <input id="date_timepicker_start" type="text" >
                <input id="date_timepicker_end" type="text" >
            </div>
        </div>
    </div>
</div>
<hr>
<div class="table-responsive-lg">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Авиакомпания</th>
            <th scope="col">Имя и Фамилия</th>
            <th scope="col">Дата</th>
            <th scope="col">Тип самолёта</th>
            <th scope="col">Откуда</th>
            <th scope="col">Куда</th>
            <th scope="col">Время вылета</th>
            <th scope="col">Время прилета</th>
        </tr>
        </thead>
        <?php
        $i = 1;
        foreach ($j as $r){
            ?>
            <tbody>
            <tr>
                <th scope="row"><?=$i?></th>
                <td><?=$r['name']?></td>
                <td><?=$r['fi']?></td>
                <td><?=$r['date']?></td>
                <td><?=$r['plane']?></td>
                <td><b><?=$r['town_from']?></b></td>
                <td><b><?=$r['town_to']?></b></td>
                <td><?=$r['time_out']?></td>
                <td><?=$r['time_in']?></td>
            </tr>
            </tbody>
            <?php
            $i++;
        }
        ?>
    </table>
</div>
