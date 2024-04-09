<?php
$awk = [123];
var_dump($awk);

$awk2 = [999 , "hello" , 3.14];
var_dump($awk2);


var_dump($awk[0]);

$awk2[0] =12345;
var_dump($awk2[0]);

$awk[] =1.234;
$awk[]="string value";
var_dump($awk);


$mizuki =["31歳","女性",11.18,25];
var_dump($mizuki);

var_dump($mizuki[0]);
var_dump($mizuki[3]);
