<?php

$i = 1;
echo "等しいかどうか\n";
var_dump($i === 1);
var_dump($i === 2);

echo "等しくないか\n";
var_dump($i !== 1);
var_dump($i !==2);

echo "等しいかどうか（文字列）";
$j = "abc";
var_dump($j === "ABC");
var_dump($j === "abc");

echo "＝＝と＝＝＝の比較１";

var_dump($i=='1');
var_dump($i==='1');

echo "＝＝と＝＝＝の比較２";
$a=2;
var_dump($a=='2a');
var_dump($a==='2a');
