<?php
// function => block kode progam yang akan berjalan saat kita panggil
    // membuat function "function namafungsi() {//statement}"
    // memanggil funtcion "namafungsi()"

    sayHello(); // tetap bisa meski belum di panggil functionya
    // berlaku untuk php

    // membuat function sayHello
    function sayHello() {
        // block kode
        echo "hello function" . PHP_EOL;
    }
    
    // memanggul fungsi sayHello()
    sayHello();
    sayHello();
    sayHello();
    sayHello();
    echo "\n";

// lokasi function
    // lokasi function tidak memilki aturan dan bebas membuat sebuah function di manapun
    //di php function dapat di panggil meski di atas namun harus sudah dibuat progam functionya
    $buat = true; // jika false maka akan error

    if ($buat) {
        function hi() {
            echo "hi function" . PHP_EOL;
        };
    };

    hi(); // function akan dapat di run hanya jika sudah di buat/definisikan