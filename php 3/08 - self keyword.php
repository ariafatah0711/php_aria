<?php
// propeties || constant => constant tidak akan di buat di object
    // propeties akan dibuat tiap istance class(object)
    // constant dibuat satu per class

// self keyword => jika di dalam class (misal di function) kita ingin mengakses constant
    // kita perlu menggunakan namaClass::namaConst
    // namun kita dapat menggunakan kata kunci self di class yang sama
    class Person
    {
        const AUTHOR = "ariafatah";

        function info() {
            // echo "AUTHOR : " . Person::AUTHOR . PHP_EOL;
            echo "AUTHOR : " . self::AUTHOR . PHP_EOL; // lebih singkat
        }
    }

    $aria = new Person();
    $aria->info();