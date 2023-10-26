<?php
// else if statement => merupakan beberapa kondisi
    // else if digunakan ketika kondisi lebih dari satu
    // bisa menggunakan elseif (digabung) atau else if (dipisah)
    /*
    if (expression) {
        statement;
    } elseif (expression) {
        statement;
    } else if (expression) {
        statement;
    } else {
        statement;
    }
    */

    $nilai = 88;

    if ($nilai >= 90) {
        echo "Nilai anda adalah A" . PHP_EOL;
    } else if ($nilai >= 80) {
        echo "Nilai anda adalah B" . PHP_EOL;
    } elseif ($nilai >= 70) {
        echo "Nilai anda adalah C" . PHP_EOL;
    } else {
        echo "Nilai anda adalah D" . PHP_EOL;
    };

// syntax alternatif => selain menggunakan kurung kurawal,
    // PHP juga menyediakan syntax alternatif menggunakan : (titik dua)
    // namun kita perlu menggunakan "endif" di akhir statment
        // dan untuk titik dua hanya bisa menggunakan elseif
    if ($nilai >= 90) :
        echo "Nilai anda adalah A" . PHP_EOL;
    elseif ($nilai >= 80) :
        echo "Nilai anda adalah B" . PHP_EOL;
    elseif ($nilai >= 70) :
        echo "Nilai anda adalah C" . PHP_EOL;
    else :
        echo "Nilai anda adalah D" . PHP_EOL;
    endif;

