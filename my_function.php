<?php
function numtodouble(int $i:int{
    $ret = $i *2;

    return $ret;
}

$num = numtodouble(10);

echo "10を二倍したら{$num}になった\n";

function numadd(int $a,int $b):int{

    $ret=$a+$b;
    return $ret;

}

$num =numadd(10,20);

echo "10+20は{$num}\n";
