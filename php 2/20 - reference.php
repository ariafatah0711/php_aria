<?php
// reference => mengakses variable yang sama dengan nama variable yang berbeda
    // reference di PHP berbeda dengan bahasa C/C++ yang memilki fitur pointer
    // analogi reference itu seperti file,
        // jika variable adalah file
        // dan value adalah isi file
    // maka reference adalah membuat shorcut (di windows) atau alias (di linux/mac) terhadap file yang sama

    // saat kita mengubah isi value dari reference,
        // maka secara otomatis value variable si aslinya pun ikut berubah

    // untuk membuat reference terhadap variable, kita bisa menggunakan fitur &

// assign by reference
    // pertama, PHP reference memungkinkan kita bisa membuat variable menuju value yang sama
    $name = "aria";

    $otherName = &$name; // shorcut ke name dan jika salah satu diubah akan ikut terubah juga
    $otherName = "budi";
    // jadi ketika ini diubah $name dan $otherName akan berubah juga
    $name = "ariafatah"; // dan sebaliknya akan tetap di ubah juga (semacam shorcut variable)

    echo $name . PHP_EOL;
    echo $otherName . PHP_EOL;

// pass by reference
    // mengirim data function ke reference
    function increment(int $value) { // memanggil string/angka
        $value++;
    }

    $counter = 1;
    increment($counter); // sama aja jadinya yang di kirim adalah 1
    echo $counter . PHP_EOL;
    
    increment(1); // sama aja
    echo $counter . PHP_EOL;

    function incrementReference(int &$value) { // memanggil berupa reference dari variable
        $value++;
    }
    incrementReference($counter); // jadi saat di kirim ini akan mengirim $counternya
    echo $counter . PHP_EOL;

// returning reference => mengembalikan nilai berupa reference
    // namun fitur ini dapat membingukan dan tidak di sarankan
    function &getValue() {
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    $a = 1000; // jadinya si get value ikut terubah juga yang tadinya return 100 sekarang jadi 1000

    $b = &getValue();
    echo $b . PHP_EOL; // jadi yang di ambil adalah nilai $a yang terbaru karean getvalue barusan telah diubah

