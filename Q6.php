<?php
function myfunk(string $a,string $b):string{

    $ret = "{$a}{$b}";
    return $ret;

}


myfunk("hello","world");
