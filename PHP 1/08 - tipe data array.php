<?php
// tipe data array => merupakan tipe data yang berisi kumpulan data yang banyak / kosong
    // array di php bisa berisi data dengan jenis yang berbeda
    // array di php memilki panjang dinamis, artinya kita bisa menambahkan data ke array sebanyak apapaun

// misal array nya ada 10 data
    // maka length datanya adalah 10
    // dan index datanya = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] // dimulai dari 0
        // data ke berapa di kurang 1

    $value = array(1, 2.5, 3); // panjang lengthnya 3 dan indexnya jadi 0, 1, 2
    var_dump($value);

    $names = ["string", 123, true, null];
    var_dump($names);

// operasi array => mengakses data, dll
    // $array[index] => mengakses data di array
    // $array[index] = value => mengubah data di array pada nomer index dengan value baru
    // $array[] = value => menambah data di array pada posisi belakang
    // unset($array[index]) => menghapus data di array, index otomatis\\
    // count($array) => mengambil total data di array / panjang datanya
    $names = ["aria", "fatah", "anom"];
    var_dump($names[2]); // fatah mengambil data index 2

    $names[0] = "budi";
    var_dump($names);

    unset($names[1]); // panjang indexnya menjadi 2 hanya saja index lainya tidak bergeser
    var_dump($names); // index ke 2 di hapus namun index lainya tidak tergeser

    $names[] = "ganteng";
    var_dump($names); // index nya jadi 0,1,2,3

    var_dump(count($names));