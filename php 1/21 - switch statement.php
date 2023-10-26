<?php
// switch statement => merupakan kondisi sederhana di if statement
    // kondisi di switch statement hanya untuk perbandingan
    $day = "kamis";
    echo "$day";

    switch ($day) {
        case "senin":
            echo "hari ini hari senin" . PHP_EOL;
            echo "besok hari selasa" . PHP_EOL;
            break;
        case "selasa":
            echo "hari ini hari selasa" . PHP_EOL;
            echo "besok hari rabu" . PHP_EOL;
            break;
        case "rabu":
            echo "hari ini hari rabu" . PHP_EOL;
            echo "besok hari kamis" . PHP_EOL;
            break;
        case "kamis":
            echo "hari ini hari kamis" . PHP_EOL;
            echo "besok hari jumat" . PHP_EOL;
            break;
        case "jumat":
            echo "hari ini hari jumat" . PHP_EOL;
            echo "besok hari sabtu" . PHP_EOL;
            break;
        case "sabtu":
            echo "hari ini hari sabtu" . PHP_EOL;
            echo "besok hari minggu" . PHP_EOL;
            break;
        case "minggu":
            echo "hari ini hari minggu" . PHP_EOL;
            echo "besok hari senin" . PHP_EOL;
            break;
        default:
            echo "hari ini tidak diketahui" . PHP_EOL;
    };

// syntax alternatif => sama seperti tadi tanpa kurung kurawal
    // namun harus ditambahkan "endswitch"
    echo "\n";
    switch ($day) :
        case "senin":
            echo "hari ini hari senin" . PHP_EOL;
            echo "besok hari selasa" . PHP_EOL;
            break;
        case "selasa":
            echo "hari ini hari selasa" . PHP_EOL;
            echo "besok hari rabu" . PHP_EOL;
            break;
        case "rabu":
            echo "hari ini hari rabu" . PHP_EOL;
            echo "besok hari kamis" . PHP_EOL;
            break;
        case "kamis":
            echo "hari ini hari kamis" . PHP_EOL;
            echo "besok hari jumat" . PHP_EOL;
            break;
        case "jumat":
            echo "hari ini hari jumat" . PHP_EOL;
            echo "besok hari sabtu" . PHP_EOL;
            break;
        case "sabtu":
            echo "hari ini hari sabtu" . PHP_EOL;
            echo "besok hari minggu" . PHP_EOL;
            break;
        case "minggu":
            echo "hari ini hari minggu" . PHP_EOL;
            echo "besok hari senin" . PHP_EOL;
            break;
        default:
            echo "hari ini tidak diketahui" . PHP_EOL;
    endswitch;
