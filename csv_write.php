<?php
// 書き込むべきデータの準備
// 「複数行」あるので、「配列の配列」でデータを持つ
$write_data =[
    [1,2,3],
    ["aaa","bbb","ccc"],
    ["aaa","b\"b","c\nc"],
];

// 書き込むファイル名の把握
$file_name = __DIR__ . "/data.csv";

// ファイルのopen
$file_obj = new SplFileObject($file_name,"w");

foreach($write_data as $datum){
    // CSVの書き込み
    $file_obj->fputcsv($datum);

}

