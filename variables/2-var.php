<?php
header('content-type:text/html;charset=utf-8');

$bool=true;
$int=23;
$float=15.20;
$arr=[];

var_dump($bool,$int,$float);

echo '<br>';

echo gettype($bool);
echo '<br>';
echo gettype($int);
echo '<br>';

var_dump(is_float($float));
var_dump(is_int($int));

echo '<hr/>';

$var1='this is a test';
$var2="this is a test";

echo $var1;
echo '<br/>';
echo $var2;

$str=<<<EOF
Example of string spanning multiple lines using heredoc syntax.
EOF;

echo '<hr/>';
echo $str;


echo '<hr>';

class Person{
    public $username;
    public $age;

    function info(){
        $this->$username="yeyilu";
        $this->$age=22;
    }

}

$person=new Person();
$username="hello";
echo $username;

echo '<br>';

class foo{
    public $bar="I am bar";
}

$foo=new foo();
$bar='bar';
echo $foo->$bar;