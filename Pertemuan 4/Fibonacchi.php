<?php
    $angka1 = 0;
    $angka2 = 1;
    echo $angka1 . ", " . $angka2;
    for ($i = 2; $i < 20; $i++) {
        $angka3 = $angka1 + $angka2;
        if ($angka3 > 20) {
            break;
        }
        echo ", " . $angka3;
        $angka1 = $angka2;
        $angka2 = $angka3;
    }
?>