<?php
// manipulasi string => Dot (titik) operator yang bisa kita gunakan untuk
    // menambahkan string dengan data lain(bisa string atau tipe data lainya)
    // kita bisa menggunakan + (pluss) untuk menambahkan string,
        // namun jika kita coba tambahkan string dengan tipe data number,
        // maka akan terjadi error
    // oleh karena itu kita bisa menggunakan . (dot) operator

    $name = "aria fatah";

    // echo "name : ";
    // echo $name;
    // echo PHP_EOL;
    // echo "nilai : ";
    // echo 100;
    // echo "\n";

    // disingkat menjadi

    echo "Name : " . $name . PHP_EOL; // PHP_EOL => untuk enter
    echo "nilai : " . 100 . "\n\n"; // sama kaya PHP_EOL

    // echo "Name : " + $name + PHP_EOL;
    // echo "nilai : " + 100 + "\n"; // error karena ditambah dengan angka

// konversi ke number dan sebaliknya
    // konversi tipe data dari str ke int/float atau sebaliknya
    // menggunakan tanda kurung (tipe data)
        // string => (string)100
        // int => (int)"100"
        // float => (float)"100.11"

    $valueString = (string)100;
    var_dump($valueString);

    $valueInt = (int)"123";
    // $valueInt = (int)"salah"; // ouputnya akan menjadi 0
    var_dump($valueInt);

    $valueFloat = (float)"1,10";
    // $valueFloat = (float)"salah"; // ouputnya akan menjadi 0
    var_dump($valueFloat);
    echo "\n";

// mengakses karakter => mengakses data tiap karakter menggunakan kurung siku
    // sama seperti array, index pertama dimulai dari 0 di  tiap karakter
    // jika mengakses index melebihi karakter string akan terjadi error
    $name = "aria";
    echo $name[0] . PHP_EOL;
    echo $name[1] . PHP_EOL;
    echo $name[2] . PHP_EOL;
    echo $name[3] . PHP_EOL;
    // echo $name[4] . PHP_EOL; // error karena melebihi index
    echo "\n";

// variable parsing => kita bisa mengguanakn karakter $untuk mengakses variable di double quote atau heredoc
    // ini memudahkan untuk menggabungkan string dan variable
    $name = "aria";
    echo "hello " . $name . ", selamat Belajar" . PHP_EOL;
    echo "Hello $name, selamat Belajar" . PHP_EOL . PHP_EOL; // variable parsing

// curly brace => menggabungkan variable dengan string tanpa ada spasi
    // menggunakan kurung kurawal ()
    // echo "hello $names1" . PHP_EOL; // error
    echo "hello {$name}s1" . PHP_EOL;