<?php
$a = random_int(1,999);
$b = random_int(1,999);

$c = $a+$b;
echo "{$a}+{$b}={$c} \n";
$c = $a-$b;
echo "{$a}-{$b}={$c} \n";
$c = $a*$b;
echo "{$a}*{$b}={$c} \n";
$c = $a/$b;
echo "{$a}/{$b}={$c} \n";
$c = $a%$b;
echo "{$a}%{$b}={$c} \n";
$c =$a**3;
echo "{$a}**3={$c} \n";
$c = pow($a,3);
echo "pow({$a},3)={$c} \n";