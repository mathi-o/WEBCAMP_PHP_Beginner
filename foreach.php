<?php
$array = [
    "key1"=>"hello",
    0=>'1st',
    1=>'2nd',
    "key2"=>3.14,
    ];

foreach($array as $k=>$v){

    echo "{$k} -> {$v}\n";

}

echo "\n";
foreach($array as $value){
    echo "{$value}\n";
}

//配列では、foreachに「$array as $value」とすることで、配列の中の要素を繰り返し処理することができます。

//そして、連想配列では、foreachに「$array as $key => $value」とすることで配列の要素を処理します。