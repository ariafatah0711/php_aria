<?php
// variable scope => merupakan variable yang dapat di akses di bagian mana
    // global => variable di luar function(hanya bisa di akses di luar)
        // variable yang dibuat di luar function memilki scope global
        // variable di scope global hanya bisa diakses di luar function
        // artinya di dalam function, kita tidak bisa mengakses variable di global function
        $scope = "global"; // global scope

        function globalSayscope() {
            // echo $scope; // error karena di luar scope variablenya
        };
        // globalSayscope();

    // local => variable di dalam function(hanya bisa di akses di dalam)
        // variable yang dibuat di dalam function memilki scope local
        // variable di scope local hanya bisa di akses di dalam function itu sendiri
        // artinya variable tersebut tidak dapat di akses dari luar function
        function localScope() {
            $scope = "local";
        }
        localScope();
        echo $scope; // akan mengambil yang global dan bukan local
        echo "\n\n";

    // static => hanya bisa di set ke local variable
        // ketika function itu telah selesai di eksekusi maka variable local itu akan menghilang
        // ketika membuat local variable menjadi static,
            // maka itu tidak akan berhenti meski function telah selesai di eksekusi
        // artinya jika functiontersebut di eksekusi lagi, maka static variable tersbut
            // akan memilki value dari sebelumnya
        function increment() {
            // $counter = 1; // ketika function di panggil value ini tetap 1
            static $counter = 1; // ketika function di panggil value akan mengikuti value sebelumnya
            // jadi static $counter itu hanya di panggil sekali dan akan tetap ada setelah function di eksekusi

            echo "counter : $counter" . PHP_EOL;

            $counter++; // akan increment yang value lama dan akan tetap menambah
        }
        increment();
        increment();
        increment();

// global keyword => membuat variable global scope dapat di akses di dalam function
    $name = "aria"; // global scope

    function sayName() {
        global $name; // global keyword
        echo "\n";
        echo "Hello $name" . PHP_EOL;
        // atau $GLOBALS

        $scope = "local";
        echo $GLOBALS["scope"]. PHP_EOL; // akan megambil yang di global
    }
    sayName();

// global variable => 
    // setiap variable yang dibuat di global scope
        // secara otomatis akan di simpan di array $GLOBAL oleh php
    // jadi kita bisa menggunakan $GLOBAL dengan 
        // key nama variable dari dalam function jika kita ingin mengakses global variable

    // $GLOBALS => variable yang bersifat super global dan dapat di akses di mana pun
        // var_dump($GLOBALS);
        // ketika kita membuat variable $name = "aria";
        // sebenernya php menjalankan $GLOBALS[$name] = "aria";
