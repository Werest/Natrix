<?php
require_once 'header.php';
require_once 'views/view_header.php';

echo '<div class="container">';
require_once 'views/view_practice.php';
$g = new George();
echo $g->ha();


echo '</div>';
require_once 'footer.php';