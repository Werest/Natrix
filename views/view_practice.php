<?php

$login = 'Hasb';
$password = '2112';

$op = array('1'=>'hello', '2'=>'my', '3'=>'friend');

$ra = range(1,  10);

$md_p_m = md5($password);
$md_p_s = sha1($password);

?>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td colspan="2">the Bird</td>
    </tr>
    </tbody>
</table>
