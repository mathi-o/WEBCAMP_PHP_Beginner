<?php

$array = ["red","yellow","blue","green","black"];

foreach($array as $value){
    echo "$value\n";
}

$array_2 =[
    "red"=>"#ff0000",
    "yellow"=>"#ffff00",
    "blue"=>"#0000ff",
    "green"=>"00ff00",
    "black"=>"000000",
    ];

foreach($array_2 as $key=>$value){

    echo "{$key}->{$value}\n";
}