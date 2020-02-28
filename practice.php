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
echo '<hr>';

//php 7 ??
echo $a = $a ?? 999;
echo $x = $x ?? "Jackie";
echo '<hr>';

$ar = [
    'Танки' => ['Т34', 'БТ-2', 'Д2'],
    'Насекомые' => ['Муха', 'Муравьи', 'Божья коровка']
];
print_r($ar);

echo '</div>';
require_once 'footer.php';