<?php
require_once 'models/model_mysql.php';
$models_models = new model_mysql();
$j = $models_models->get_info();


if(!empty($_POST)){
?>
    <div class="alert alert-primary" role="alert">
        <?
            print_r($_POST);
            echo isset($_POST['title_game']);
            echo "Вами было добавлена игра <b>" . $_POST['title_game'] . "</b> ";
        ?>
    </div>
    <?

}
?>

<div class="container">
    <div class="container p-2">
        <form method="post">
            <div class="form-group">
                <label for="title_game">Название игры</label>
                <input value="<?if(!empty($_POST['title_game'])){echo $_POST['title_game'];} ?>" name="title_game" type="text" class="form-control" id="title_game" aria-describedby="title_gameHelp" placeholder="Введите название игры">
            </div>
            <div class="form-group">
                <label for="info">Описание игры</label>
                <input value="<?if(!empty($_POST['info'])){echo $_POST['info'];} ?>" name="info" type="text" class="form-control" id="info" aria-describedby="infoHelp" placeholder="Введите ссылку">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>

<div class="container p-2">
    <div class="row justify-content-md-center">
        <? foreach ($j as $r) { ?>
            <div class="col-6 p-3">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title"><?=$r['name']?></h5>
                        <p class="card-text"><?=$r['info']?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?=$r['name']?>">
                            Launch demo modal
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
                            <?=$r['info']?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>