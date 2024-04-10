<?php
try{

    throw new \Exception(" 自力で投げた例外");

    $obj = new SplFileObject('dummy');

    echo "例外が起きた時の処理　ここは通る？\n";
} catch (\Throwable $e){

    echo "例外が発生したらここを通る\n";
    var_dump($e->getMessage()); //$e->getMessage() で「例外が発生した理由」がわかる
}
echo "fin \n";
