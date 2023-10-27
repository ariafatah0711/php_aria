<?php
// for each => mengakses data array perulanga
    // yang digunakan untuk mengakses data sebuah array

    $names = ["aria", "fatah", "anom"];

// tanpa for each
    for ($i = 0; $i < count($names); $i++) {
        echo "hi $names[$i]" . PHP_EOL;
    }
    echo "\n";

// menggunakan for each
    // foreach (array as dataarray)
    foreach ($names as $name) {
        echo "hi $name" . PHP_EOL;
    }
    echo "\n";

    // jika ingin index nya
    foreach ($names as $index => $name) {
        echo "data ke-$index : $name" . PHP_EOL;
    };
    echo "\n";

// perulangan bentuk map / key
    $person = [
        "first_name" => "aria",
        "middle_name" => "fatah",
        "last_name" => "anom"
    ];

    foreach ($person as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    };

