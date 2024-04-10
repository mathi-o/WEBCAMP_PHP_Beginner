<?php

class クラス名{

    //
    private $変数;

    public function 関数(){

        //処理
        echo "メゾット内の処理\n";
    }

    public function set変数($v){

        $this->変数=$v;  //$this->：自分自身（今回だとclass クラス名）の中の“このプロパティ”を指定できる
    }

    public function get変数(){
        return $this->変数;
    }
}

//クラスからインスタンス（オブジェクト）を作ってみる。
$obj = new クラス名();

var_dump($obj);

$obj->関数(); //メゾットを呼び出す

//echo $obj ->変数,"\n"; 変数を読む：これはカプセル化によりprivateには外からアクセスできずエラーになる。

$obj->set変数('data'); //$obj->set変数　でset変数を呼び出して'data'を引数として渡す。

echo $obj->get変数() , "\n";　// get変数を呼び出して表示


