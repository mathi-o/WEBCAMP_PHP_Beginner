<?php


function h(string $s) : string{
    return htmlspecialchars($s, ENT_QUOTES);
}

$counter = intval($_COOKIE['counter'] ?? 1);


$next_counter = strval($counter + 1);

setcookie('counter', $next_counter);

echo "あなたがこのサイトを訪れたのは " , h( strval($counter) ) , "回目です";