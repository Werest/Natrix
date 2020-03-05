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

echo '<hr>';
$arr = 198;
$p = str_split($arr);
rsort($p);
$p = (int)implode($p);
var_dump($p);
echo '<hr>';
$p = str_split($arr);
$re = array_sum($p);
echo $re;
echo '<hr>';
$a_ = 5;
$b_ = 1;

$a_ = $a_ + $b_; // 6
$b_ = $a_ - $b_; // 5
$a_ = $a_ - $b_; // 1
echo $a_ .'/'. $b_;


echo '</div>';
require_once 'footer.php';