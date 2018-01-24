<?php

class Person{
    function do_person(){
        return 'say hello';
    }
}

$person=new Person();
$p=$person->do_person();
echo $p;

echo '<hr>';

$int=10;
$bool=(boolean)$int;
// echo $bool;
var_dump($bool);

$var=NULL;
$var=null;
var_dump($var);
echo '<hr>';

$a='hello';
$$a='world';
$c=$a.$$a;
echo $c.'<br>';
echo ${$a}.'<br>';

echo '<hr>';

$a=1;
$b=2;

function sum(){
    return $GLOBALS['b']+=$GLOBALS['a'];
    // return $a+$b;
}

sum();
echo $b;

