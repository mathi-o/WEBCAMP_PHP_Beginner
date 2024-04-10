<?php

abstract class 抽象クラス{

    abstract public function 抽象メソッド();

    public function 普通のメソッド(){

        echo "普通のメゾット\n";
    }
}

class 子クラス extends 抽象クラス{

    public function 抽象メソッド(){

        echo "子クラスで実装した抽象メソッド\n";
    }

}

//抽象クラスはnewで作動させることは禁止されている

$obj = new 子クラス();
$obj ->抽象メソッド();
$obj ->普通のメソッド();