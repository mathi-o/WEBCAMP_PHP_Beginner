<?php

for($i=1; $i<10; ++$i){
    echo "{$i}は奇数かな？\n";
    if(($i%2)===1){
        echo "奇数です\n";

        continue;
    }
    echo "偶数です\n";
}

$a=0;
while($a<10){
    echo "{$a} \n";
    if($a>=5){
        echo "{$a}　以上なのでループを抜けます。\n";
        break;
    }
    ++$a;
}