<?php
// array fuction => merupakan function untuk manipulasi array
    // array_keys() => mengambil semua keys milik array
    // array_values() => mengambil semua value milik array
    // array_map() => mengubah semua data array dengan callback
    // sort() => mengurutkan array (desending)
    // rsort() => mengurutkan array terbalik (resending)
    // shuffle() => mengubah posisi data di array secara random

    $data = [1, 2, 3, 4, 5];

    var_dump(array_map(fn($data) => $data * 10, $data)); // 10, 20, 30, 40, 50
    // atau
    $mapFunction = fn($data) => $data * 10;
    var_dump(array_map($mapFunction, $data));
    echo "\n";

    rsort($data); // dibalik jadi 5, 4, 3, ...
    var_dump($data);

    sort($data); // di balik jadi 1, 2, 3, ...
    var_dump($data);
    echo "\n";

    $data = [
        "firstName" => "aria",
        "lastName" => "fatah"
    ];
    var_dump(array_keys($data));
    var_dump(array_values($data));