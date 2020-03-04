<?php
require_once 'models/model_mysql.php';
$models_models = new model_mysql();
$j = $models_models->get_info();

$dir_img_games = 'img/games/';

if(isset($_POST['title_game']) && isset($_POST['info'])) {
    if (strlen($_POST['title_game']) > 0 && strlen($_POST['info']) > 0) {
        $name = $_POST['title_game'];
        $info = $_POST['info'];

        if ($models_models->get_info($name) == 0) {
            $models_models->insert_game($name, $info);
            echo '<div class="alert alert-primary" role="alert">';
            echo "Вами было добавлена игра <b>" . $name . "</b> . Спасибо!";
            echo '</div>';

        }else{
            echo '<div class="alert alert-primary" role="alert">';
            echo "Извините, но такая игра имеется -  <b>" . $name . "</b> . Спасибо!";
            echo '</div>';
            $_POST['title_game'] = null;
            $_POST['info'] = null;
        }
    }
}
?>

<div class="container">
    <div class="container p-2">
        <form method="post">
            <div class="form-group">
                <label for="title_game">Название игры</label>
                <input value="<?if(!empty($_POST['title_game'])){echo $_POST['title_game'];} ?>"
                       name="title_game"
                       type="text"
                       class="form-control"
                       id="title_game"
                       aria-describedby="title_gameHelp"
                       placeholder="Введите название игры" required>
            </div>
            <div class="form-group">
                <label for="info">Описание игры</label>
                <textarea
                        name="info"
                        class="form-control"
                        id="info"
                        aria-describedby="infoHelp"
                        required><?if(!empty($_POST['info'])){echo $_POST['info'];} ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>

<div class="container p-2">
    <div class="row justify-content-md-center">
        <? foreach ($j as $r) {

            ?>
            <div class="col-6 p-3">
                <div class="card w-100">
                    <div class="card-body">
                        <a href="<?=$r['link']?>" target="_blank"><h5 class="card-title"><?=$r['name']?></h5></a>
                        <p class="card-text"><?=$r['info']?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?=$r['name']?>">
                            Подробнее о <?=$r['name']?>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal_<?=$r['name']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?=$r['name']?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><?=$r['info']?></p>
                            <?
                            if(strlen($r['img'])> 0 ){
                                $img = $dir_img_games . $r['img'];
                                echo '<img src="'. $img .'" alt="" class="img-fluid">';
                            }
                            ?>
                            <? if (strlen($r['link'])>0) {
                                echo '<p class="small">Ссылка: <a href='. $r['link'] .'>' . $r['link'] . '</a></p>';
                            }
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
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

$j = $models_models->get_info_2();
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
