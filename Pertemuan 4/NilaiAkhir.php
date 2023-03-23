<?php
    $mtk = intval(readline("Masukan Nilai Matematika: "));
    $fis = intval(readline("Masukan Nilai Fisika: "));
    $bio = intval(readline("Masukan Nilai Biologi: "));

    $nilaiAkhir = ($mtk + $fis + $bio) / 3;

    if ($nilaiAkhir >= 60 && $nilaiAkhir <= 100){
        echo "Nilai = ".$nilaiAkhir." memenuhi nilai KKM.\nSelamat Anda Dinyatakan Lulus";
    } else {
        echo "Nilai = ".$nilaiAkhir." tidak memenuhi nilai KKM.\nMohon Maaf Anda Dinyatakan Tidak Lulus";
    }
?>