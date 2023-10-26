<?php
// ternary operator => penggunaan if statement, lalu jika benar
    // kita ingin memberi nilai terhadap variable x dan jika salah dengan nilai y
    // ternary opearator menggunakan kata kunci ? dan :
        // $var = expression ? valueTrue : valueFalse;
    $gender = "PRIA";
    $hi = null;

// tanpa ternary
    if ($gender == "PRIA") {
        $hi = "Hi bro";
    } else {
        $hi = "Hi nona";
    };

    echo $hi . PHP_EOL;

// jika menggunakan ternary opearator hanya perlu
    // $var = expression ? valueTrue : valueFalse;
    $hi = $gender == "PRIA" ? "Hi bro" : "Ho nona";
    $hi = ($gender == "PRIA") ? "Hi bro" : "Ho nona";

    echo $hi . PHP_EOL;