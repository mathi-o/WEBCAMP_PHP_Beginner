<?php

class 親クラス{
    
    public function 親メゾット(){
        
        echo "親クラス内の親メゾット\n";
    }
    public function メゾット(){
        
        echo "親クラス内のメゾット\n";
    }
    
}
// 継承（extends）
class 子クラス extends 親クラス{
    
    public function 子メゾット(){
    
        echo "子クラス内の子メゾット\n";
    }
    
    public function メゾット{
        
        echo "子クラス内のメゾット\n";
    }
    
}

$obj = new 子クラス();　
$obj ->親メゾット(); //子クラス内にないメゾットでも親が持っていたら親メゾットも使える。
$obj ->子メゾット();
$obj ->メゾット();　// 親子共通で定義されているメゾットは自分優先