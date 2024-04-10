<?php
interface インターフェースA{

    public function メゾットA();
}

interface インターフェースB{

    public function メゾットB(int $i);
}

class HOGE implements インターフェースA , インターフェースB{

    public function メゾットA(){
        echo "メゾットA\n";
    }

    public function メゾットB(int $i){

        echo "メゾットB {$i}\n";
    }
}

$obj = new HOGE();
var_dump($obj);

$obj->メゾットA();
$obj->メゾットB(10);
