<?php
$s="hello";
var_dump($s);

echo $s[1] , "\n";

$multi_string ="あいうえお";
var_dump($multi_string);

echo $multi_string[0],"\n";

$num_i=123;
$num_s="123";
var_dump($num_i);
var_dump($num_s);

$double_s = "num is {$num_i} \n";
$single_s = 'num is {$num_i} \n';
var_dump($double_s);
var_dump($single_s);

$bool_t = true;
$bool_f = false;
var_dump($bool_t);
var_dump($bool_f);

$bool_t_large = TRUE;
var_dump($bool_t_large);

$null_val = null;
var_dump($null_val);