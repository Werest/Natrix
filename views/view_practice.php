
<?php
require_once 'view_pratice_bootstrap.php';

$login = 'Hasb';
$password = '2112';

$op = array('1'=>'hello', '2'=>'my', '3'=>'friend');

$ra = range(1,  10);

$md_p_m = md5($password);
$md_p_s = sha1($password);


echo date(DATE_RSS);
echo "<br>";
$num = $number = $var = 1;
echo $num ." ". $number ." ". $var;
echo "<br>";

//echo `ls -l`;
