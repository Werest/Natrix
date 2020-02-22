<?php

require_once 'models/model_news.php';
$n = new model_news();
ob_start();
echo "Hello";
echo ob_get_length();
ob_end_flush();
?>

<div class="container p-2">
    News!!!
</div>