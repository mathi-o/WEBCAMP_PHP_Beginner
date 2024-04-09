<?php
function My(int $a){
    $ret =$a;
    echo "in function:a is {$ret}\n";


}


$a=10;
echo "global:a is {$a}\n";
My($a);

function myfunk(){

    $b=20;
    echo "in function:b is{$b}\n";
    echo "in function:a is {$a}\n";
}
myfunk();

echo "global:b is {$b}\n";

