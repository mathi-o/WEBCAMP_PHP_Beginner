<?php

class HOGE{

    private static $静的プロパティ;


    public static function 静的なメソッド(){
        echo "静的なメソッド\n";
    }

    public static function set静的プロパティ($v){

        static::$静的プロパティ=$v;
    }

    public static function get静的プロパティ(){

        return static::$静的プロパティ;
    }
}

HOGE::静的なメソッド();

HOGE::set静的プロパティ("set string");
echo HOGE::get静的プロパティ(),"\n";

//newでオブジェクトを作成し、アロー演算子 -> でアクセスするのが基本だが、直接スコープ演算子を使ってアクセスできるのが静的なメソッド・プロパティ。
//クラス名::メソッド名() 
//static::$静的プロパティ staticなprivateプロパティにアクセスする書き方。$this->は使えない。
