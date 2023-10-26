<?php
// data null => data kosong
    // mengecek apakah sebuah data null atau bukan
    // menggunakan function isset($variable)
    // namun kita dapat menggunakan ??

// tanpa null coalescing opearator
    $data = [
        "action" => null,
        // "action" => "create",
    ];

    // mengecek apakah array data dan object action ada dan tidak null jika ada akan memberikan nilainya
    // jika action null / tidak ada maka $action akan menampilkan null
    if (isset($data['action'])) {
        $action = $data['action'];
    } else {
        $action = 'nothing';
    };

    echo $action . PHP_EOL;

// menggunakan null coalescing operator
    $action = $data["action"] ?? "nothing";

    echo $action;