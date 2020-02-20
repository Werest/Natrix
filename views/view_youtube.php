<div class="container p-2">
    <form method="post">
        <div class="form-group">
            <label for="link">Ссылка на видео</label>
            <input name="link" type="text" class="form-control" id="link" aria-describedby="linkHelp" placeholder="Введите ссылку">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

<?php
require_once 'models/model_mysql.php';
$m = new model_mysql();
$m->insert_youtube();
$j = $m->get_links();
?>

<div class="container p-2">
<? foreach ($j as $r) { ?>
    <div class="card" style="width: 10rem;">
        <iframe width="560" class="card-img-top" height="315" src="<?=$r['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<? } ?>
</div>
