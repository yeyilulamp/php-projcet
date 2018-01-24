<?php
header('content-type:text/html;charset=utf-8');

$a=5;
$a++;
echo $a;

echo '<br>';

$a=5;
++$a;
echo $a;


echo '<hr>';

$max=max([10,5,6],[5,7,10]);
print_r($max);//Array ( [0] => 10 [1] => 5 [2] => 6 ) 