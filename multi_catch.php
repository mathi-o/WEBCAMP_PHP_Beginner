<?php
class MyException extends Exception{

}

try {

    throw new \MyException ("自力で投げた例外");
    throw new TypeError ("自力で投げた　TypeError");
    throw new Exception ("自力で投げた　Exception");

}catch (MyException $e){
    echo "MyException をキャッチしました\n";
    var_dump($e->getMessage());
}catch (\Error $e){
    echo "Errorをキャッチしました\n";
    var_dump($e->getMessage());
}catch (\Exception $e){
    echo "Exceptionをキャッチしました\n";
    var_dump($e->getMessage());
}
catch (\Throwable $e){
    echo "Throwableをキャッチしました\n";
    var_dump($e->getMessage());
}
echo "fin.\n";

