<?php
// match expression => merupakan struktur kontrol yang lebih baik
    // tidak seperti switch biasa
    // match expression aartinya dia bisa mengembalikan value

// progam kode switch statement
    $value = "A";

    $result = "";
    switch($value) {
        case "A":
        case "B":
        case "C":
            $result = "anda lulus";
            break;
        case "D":
            $result = "anda tidak lulus";
            break;
        case "E":
            $result = "sepertinya ada salah jurusan";
            break;
        default;
            $result = "nilai apa itu";
    }

    echo $result . PHP_EOL;

// progam kode match expression
    $value = "A";

    $result = match ($value) {
        "A", "B", "C" => "anda lulus",
        "D" => "anda tidak lulus",
        "E" => "sepertinya anda salah jurusan",
        default => "nilai apa itu"
    };

    echo $result . PHP_EOL;

// Non Equals Check di Match expression
    // selain equal check berbeda dengan switch case
    // di match expression kita bisa melakukan pengecekan kondisi lainya
    // misalnya pengecekan menggunakan kondisi perbandingan,
        // bahkan pengecekan kondisi berdasarkan boolean expression yang dihasilkan oleh function

    $value = 50;

    $result = match (true) {
        $value == 100 => "S",
        $value >= 80 => "A",
        $value >= 70 => "B",
        $value <= 60 => "C",
    };

    echo $result . PHP_EOL;

// match expression dengan kondisi
    $name = "Mr. Aria";

    $result = match (true) {
        str_contains($name, "Mr.") => "Hello sir",
        str_contains($name, "Mrs.") => "Hello mam",
        default => "Hello",
    };

    echo $result . PHP_EOL;