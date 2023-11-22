<?php
// dateTimeZone => untuk mengubah timeZone DateTime
    // menggunakan function setTimeZone()
    echo PHP_EOL . "==== setTimeZone ====" . PHP_EOL;
    $date = new DateTime(); // timezone default utc
    var_dump($date);

    $date->setTimeZone(new DateTimeZone("Asia/Jakarta")); // timezone nya jadi berubah ke Asia/jakarta
    var_dump($date);

// format DateTime => membuat representasi string dari DateTime yang kita buat
    // menggunakan function format()
    // function format menerima argument berupa format string
        // ini bisa kita gunakan untuk memanipulasi string format waktu
    echo PHP_EOL . "waktu saat ini : " . PHP_EOL;
    echo $date->format("Y-m-d H:i:s") . PHP_EOL; // Year, months, day, Hours , I = minute, second

// parseDatetime => melakukan parsing string menjadi datetime sesuai format yang kita mau
    // kita gunakan static function createFromFormat() dari class DateTime
    $date = DateTime::createFromFormat("Y-m-d H:i:s", "1999-12-29 10:10:10",
     new DateTimeZone("Asia/Jakarta"));

    echo PHP_EOL . "mengubah string: 1999-12-29 10:10:10 menjadi waktu DateTime" . PHP_EOL;
    // var_dump($date);
    // jika dalam penginputan string salah
        // outputnya akan menjadi bool(false);
    if ($date) {
        var_dump($date);
    } else {
        echo "Format Salah" . PHP_EOL;
    }