<?php
function h(string $s):string{
    return htmlspecialchars($s,ENT_QUOTES);
}

$html =[

    "pass"=>"パスワード",
    "radioa"=>"ラジオ",
    "check"=>"チェックボックス",
    "sele"=>"セレクト",
    "area"=>"テキストエリア",
    "hide"=>"隠れた入力",


    ];

$data=[];

foreach($html as $name=>$type){
    $data[$name]=$_POST[$name]?? "";
}

var_dump($data);
