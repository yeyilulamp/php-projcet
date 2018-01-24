<?php

define('USERNAME','yeyilu');

echo USERNAME;

echo '<br>';

define("USER",'root');
define('PASSWORD','root123');
define("HOST",'127.0.0.1');
define('DBNAME', 'test');


$mysqli=new mysqli(HOST,USER,PASSWORD,DBNAME);
echo '<pre>';
print_r($mysqli);
echo '</pre>';

echo '<br>';
const NAME="king";
echo NAME;

echo '<hr>';
printf(USERNAME,NAME);