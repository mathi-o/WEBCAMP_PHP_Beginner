<?php
$fibo =[0,1];

for($i=0; $i<100; ++ $i){
    $fibo[] = $fibo[$i] + $fibo[$i+1];
    if($fibo[$i+2]>10000){
        break ;
    }
}

foreach($fibo as $val){
        echo "{$val}\n";
}

