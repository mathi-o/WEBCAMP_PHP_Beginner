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
