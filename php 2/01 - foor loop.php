<?php
// for loop =>  merupakan sebuah kata kunci yang bisa  digunakan untuk melakukan perulangan
    // block kode yang terdapat di foo akan selalu diulangi selama kondisi for terpenuhi
    /*
    for (init statement; kondisi; post statement) {
        // block perulangan
    }
    */
        // init statement => akan di eksekusi hanya sekali di awal sebelum perulangan
        // kondisi akan dilakukan pengecekan setiap perulangan
            // jika true akan di eksekusi, lalu di cek lagi sampai dia false dan baru selesai
        // post statement => akan di eksekusi setiap kali di akhir perulangan
        // init statement, kondisi dan post statement tidak wajib diisi,
            // jika kondisi tidak diisi, berarti kondisi selalu bernilai true
    
    // perulangan terus menerus
    // for (; ;) {
        // echo "Helo For Loop" . PHP_EOL;
    // };

    // perulangan dengan kondisi
    $counter = 1;
    for (; $counter <= 10 ;) {
        echo "perulangan for ke-$counter" . PHP_EOL;
        $counter++;
    }
    echo "\n";
    
    // perulangan dengan init statement dan kondisi
    for ($counter = 101; $counter <= 110;) {
        echo "perulangan for ke-$counter" . PHP_EOL;
        $counter++;
    }
    echo "\n";
    
    // perulangan dengan init, kondisi, dan post statement
    for ($counter = 1001; $counter <= 1010; $counter++) {
        echo "perulangan for ke-$counter" . PHP_EOL;
    }
    echo "\n";

// syntax alternatif foor loop
    for ($counter = 10; $counter >= 0; $counter--) :
        echo "perulangan for ke-$counter" . PHP_EOL;
    endfor;