<?php
// array sebagai map => asosiasi antara key dan value
    // namun di PHP map bisa dibuat menggunakan array
    // secara default array menggunakan index(number)
        // sebagai key dan valuenya bebas memasukan data ke array
    // namun index di arraynya tidak harus selalu number dan bisa diubah jadi string misalnya
    // seperti object di bahasa javascript
    $aria = array(
    // default dari array
        // 0 => "aria",
        // 1 => "fatah",
        // 2 => "anom",
    // saat menggunakan map
        "id" => "123",
        "name" => "Aria Fatah Anom",
        "age" => 17
    );

    var_dump($aria); // mengambil semua data

    var_dump($aria["id"]); // jika mengambil salah satu data
    echo "\n";

    // bisa juga pakai []
    $budi = [
        "id" => "321",
        "name" => "budi",
        "age" => 21
    ];

    var_dump($budi);