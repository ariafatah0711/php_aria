<?php
// constant => variabel yang tidak dapat diubah
    // variable di php sifatnya mutable(dapat diubah)
    // variable imutable (tidak dapat diubah)
    // jika ingin buat imutable pake constant

// constant => tidak dapat diubah setelah di deklarasi
    // membuat dengan menggunakan function define()
    // constant pake UPPER_CASE
    define("AUTHOR", "Progammer Jaman Now");
    define("APP_VERSION", 100);

// define("AUTHOR", "aria fatah"); // akan error jika const AUTHOR diubah
    echo "Author \t\t: ";
    echo AUTHOR;
    echo "\n";

    echo "App Version \t: ";
    echo APP_VERSION;
    echo "\n";