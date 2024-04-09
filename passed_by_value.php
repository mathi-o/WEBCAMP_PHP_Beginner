<?php
function myfunk(int $i){

    $i=$i*2;
    echo "in function : i is {$i}\n";


}

$i = 10;

myfunk($i);

echo "global :i is {$i}\n";
