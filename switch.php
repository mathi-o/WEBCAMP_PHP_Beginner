<?php
$i=1;
switch($i){
    case 0:
        echo "iは０です\n";
    break;

    case 1:
        echo "iは1です\n";
    break;

    default:
        echo "iは０と１以外です";
        break;

}

// PHP 8未満だと特に注意が必要なコード
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;

    case '2':
        echo "i は '2'(string)です \n";
        break;

    case 2:
        echo "i は 2(int)です \n";
        break;

}