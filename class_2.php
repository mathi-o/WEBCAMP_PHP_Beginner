<?php

class Myclass{

    //オブジェクト定数の宣言
    const HOGE = 'string';

    public function __construct(){

        echo "コンストラクトが動いた\n"; 
    }

    public function __destruct(){
        echo "デストラクトが動いた\n";
    }
}

var_dump(Myclass::HOGE); // 「::」：スコープ定義演算子

$obj = new Myclass();