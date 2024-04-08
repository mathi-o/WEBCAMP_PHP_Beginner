<?php
$array =[
//   $array[0]
    [
        "key1"=>1, //$array[0][key1]の値は1 
        "key2"=>2, //$array[0][key2]の値は２
        "key3"=>3,
        ],
// $array[1]
    [
        "key1"=>11,
        "key2"=>22,
        "key3"=>33,
        ],
// $array[2]
    [
        "key1"=>111,
        "key2"=>222,
        "key3"=>333,
        ],
    ];

var_dump($array);


foreach($array as $key=>$value){
    echo "{$key}番目の配列\n";

    foreach($value as $k=>$v){
        echo "{$k}->{$v}\n";
    }
    echo "\n";
}
// $keyは$array[0]~[2]を指す。 $valueは["key1","key2","key3"]全体を指す。　$kは"key1"。$Vは１とか２とかの値。