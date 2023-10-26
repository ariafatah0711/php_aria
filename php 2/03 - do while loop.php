<?php
// do while loop => pengecekan kondisi di lakukan setelah perulangan
    // do while loop akan melakukan setidaknya sekali perulangan dilakukan
    // walaupun kondisi tidak bernilai true
    $counter = 11;

    do {
        // block statement ini akan di eksekusi terlebih dahulu
        // baru di cek kondisinya
        echo "ini akan di eksekusi minimal satu kali" . PHP_EOL;
        $counter++;
    } while ($counter <= 10); // perulangannya di belakang

    