<?php

class Mytest{

    public function add(int $i,int$j){

        $k=$i+$j;
        return $k;
    }
    public function sub(int $i,int $j){

        $k=$i-$j;
        return $k;
    }
}

$obj = new Mytest();

$obj ->add(10,20);
$obj ->sub(20,10);


class Mytest2{

    private $price;
    private $name;

    public function setprice($i){
        $this-> price =$i;
    }
    public function getprice(){
        return $this->price;
    }

    public function setName($s){
        $this->name =$s;
    }
    public function getName(){
        return $this->name;

    }

}
    $obj2 = new Mytest2();

    $obj2->setprice(100);
    echo $obj2->getprice(),"\n";

    $obj2 ->setName('name');
    echo $obj2 ->getName(),"\n";

