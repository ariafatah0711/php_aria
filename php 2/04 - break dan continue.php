<?php
// break dan continue => 
    // break => untuk menghentikan case pada sebuah perulangan atau case
    // continue => menghentikan perulangan saat ini (skip perulangan saat ini)
        // namun masih berlanjut

    $counter = 1;

// break
    while(true) {
        echo "perulangan ke-$counter" . PHP_EOL;
        $counter++;

        if ($counter > 10) {
            break; // akan langsung keluar dari progam perulangan
            echo "pesan ini tidak di tampilkan dan di skip yang bawahnya";
        };
    };

// continue
for ($counter = 0; $counter <= 25; $counter++) {
    if ($counter % 2 == 0) {
        continue; // angka genap akan di continue
        echo "pesan ini tidak di tampilkan dan di skip yang bawahnya";
    };

    echo "perulangan ganjil ke-$counter" . PHP_EOL; // hanya angka ganjil
};