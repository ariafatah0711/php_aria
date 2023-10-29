<?php
// require dan include => mengambil file php lain
    // agar tidak bertumpuk di satu file
    // require => jika file yang kita ambil tidak ada,
        // maka akan terjadi error dan progam akan terhenti
    // include => jika file yang kita ambil tidak ada
        // maka hanya akan memberikan peringatan, namun progam akan tetap di lanjutkan

// require
    require "./lib/sayHello.php";
    // require "./lib/aaaaaaa.php"; // error => peringatan, dan kode berhenti

// include
    include "./lib/salah"; // hanya peringatan

    echo "\n";
    echo sayHello("aria", "fatah");
    echo "\n\n";

// posisi require dan include => harus di include/require terlebih dahulu baru dapat digunakan
    // progam php dibaca dari atas ke bawah

// require_once dan inlcude_once
    // function require akan selalu mengambil file yang kita inginkan
        // dan akan mengambil file berkali kali jika di ambil terus
        // dan akan error redclare
    // namun kita dapat mengambil function file yang sama tanpa me require ulang

    /*
    require "./lib/sayHello.php";
    require "./lib/sayHello.php"; // akan error karena ini telah di panggil
    */
    require_once "./lib/sayHello.php";
    include_once "./lib/sayHello.php";

    echo sayHello("fadly", "haqqi");

