<?php
// stdClass(standar class) => adalah class kosong bawaan dari PHP
    // yang digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
    // std class sangat berguna ketika kita ingin melakukan 
        //konversi dari data array ke object secara otomatis
    
// koversi array ke stdClass
    $array = [
        "firstName" => "aria",
        "middleName" => "fatah",
        "lastName" => "anom"
    ];

    $object = (object) $array;
    var_dump($object);

    echo $array["firstName"] . PHP_EOL; // ngakses array

    echo $object->firstName; // ngakses object
    echo $object->middleName;
    echo $object->lastName . PHP_EOL;

// koversi class menjadi array
    $arrayLagi = (array) $object;
    var_dump($arrayLagi);
    echo PHP_EOL . PHP_EOL;

    // jika menkonversi object class menjadi array yang bukan stdClass
    require_once "../php 3/data/Person_construct.php";

    $person = new Person("ariafatah", "depok");
    var_dump($person);

    $arrayPerson = (array) $person;
    var_dump($arrayPerson);