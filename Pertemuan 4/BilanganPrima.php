<?php
    $n = intval(readline("Angka Prima dari 1 sampai: "));
    for ($i = 1; $i <= $n; $i ++) {
        $a = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0){
                $a++;
            }
        }
        if ($a == 2){
         echo $i.' ';
        }
    }
?>