<?php
// anonymous function => merupakan function tanpa nama
    // disebut juga closure
    // biasanya digunakan sebagai argument atau sebuah value di variable
    // anonymous function membuat kita bisa mengirim argument di function lain
    $sayHello = function (string $name) {
        echo "Hello $name" . PHP_EOL;
    };
    // perlu titik koma karena ini statement

    $sayHello("aria");
    $sayHello("malik");
    $sayHello("eko");
    echo "\n";

// anonymous function sebagai argument
    function sayGoodBye(string $name, $filter) {
        $finalName = $filter($name);
        echo "Good Bye $finalName" . PHP_EOL;
    }

    sayGoodBye("aria", function (string $name) {
        return strtoupper($name);
    });

    // bisa juga di simpan variable function
    $filterFunction = function (string $name): string {
        return strtoupper($name);
    };
    
    sayGoodBye("vido", $filterFunction);
    echo "\n";

// mengakses variable di luar closure
    // secara default functio tidak bisa mengakses variable yang terdapat di luar function / anonymous fuction
        // kita perlu explicit menyebutkanya menggunakan kata kunci use $namevar
    $firstName = "aria";
    $lastName = "fatah";

    // $sayHelloAria = function () {
    //     echo "Hello $firstName $lastName" . PHP_EOL;
    // };
    // $sayHelloAria(); // tidak bisa di akses karena variable berada di luar

    // use berfungsi untuk menguubah suatu variable agar dapat di akses di anonymous function tertentu
    $sayHello = function () use ($firstName, $lastName) {
        echo "Hello $firstName $lastName" . PHP_EOL;
    };
    $firstName = "aria";
    $lastName = "ganteng"; // tidak berubah ketika diganti
    // karena saat di use hanya mengambil yang telah ada

    $sayHello();