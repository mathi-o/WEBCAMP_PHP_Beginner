<?php
$file_name = __DIR__ . "/file_write_overwrite.txt";

$write_string = "書き込む内容\n";

file_put_contents($file_name,$write_string);

//上書きでは、「書き込むときに、ファイルをいったん"空"にしてから書き込む」ので、以前の内容はすべて削除されます。