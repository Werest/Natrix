<?php
require_once 'header.php';
require_once 'views/view_header.php';

echo '<div class="container">';
require_once 'views/view_practice.php';
$g = new George();
echo $g->ha();
echo "<br>";

$cl = clone $g;
echo $cl->ha(44, 55);
echo "<br>";

$x = 10;
$x = $x < 0 ? 'Yes' : 'No';
echo $x;


echo '</div>';
require_once 'footer.php';