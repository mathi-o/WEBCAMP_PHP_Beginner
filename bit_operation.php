<?php
$i = random_int(0, 255);
$j = random_int(0, 255);


$k = $i & $j;
printf("%x & %x = %x \n", $i, $j, $k);


$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);


$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);


$k = ~$i;
printf("~%x = %x \n", $i, $k);