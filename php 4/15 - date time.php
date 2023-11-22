<?php
// dateTime => merupakan function yang digunakan untuk memanipulasi data atau waktu
    // setTime($hour, $minute, $second) => mengubah waktu Datetime
    // setDate($year, $month, $day) => mengubah tanggal DateTime
    // setTimestamp($unixTimestamp) => mengubah unix timestap DateTime
    echo "==== DateTime ====" .  PHP_EOL;
    $date = new DateTime(); // akan otomatis membuat waktu saat ini dibuat
    var_dump($date);

    $date->setDate(2020, 12, 30); // "2020-12-30 14:35:40.055744" 
    var_dump($date);

    $date->setTime(12, 12, 12); // "2020-12-30 12:12:12.000000"
    var_dump($date);

    // waktunya UTC jadinya tidak sama dengan waktu kita
// jika ingin ubah ke folder PHP lalu cari file PHP.ini
    // lalu ubah [Date] timezone menjadi date.timezone=Asia/Jakarta baru akan keubah 

// dateInterval => memanipulasi waktu dan tanggal sebagian saja
    // misalnyahanya menambahkan 1 tahun atau mengurangi beberapa hari
    // menggunakan function add milik DateTime
        // namun function add tersebut menerima paramter berupa Dateinterval
    // saat menggunakan Dateinterval, kita perlu menentukan berapa banyak kita menambahkan interval
    // untuk pembuatan duration, harus di awali kata P artinya Periode
    echo PHP_EOL . "==== DateInterval ====" .  PHP_EOL;

    // Y = years, M = months, D = days, W = weaks, H = hours, M = minutes, S = second
    $date->add(new Dateinterval("P1Y")); // periode 1 year / 1 tahun

    $dateInterval = new Dateinterval("P1M"); // periode 1 months / 1 bulan
    $dateInterval->invert = 1; // jadi mines / mengurangi
    // $dateInterval->invert = true; // sama aja

    $date->add($dateInterval);

    // saat date di add DateInterval 1Y artinya yang tadinya 2020 jadi 2021
        // lalu kita add lagi 1 M artinya yang tadinya bulan 12 jadi 11
    var_dump($date); // "2020-12-30 12:12:12.000000" menjadi "2021-11-30 12:12:12.000000" 