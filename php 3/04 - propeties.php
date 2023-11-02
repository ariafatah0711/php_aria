<?php
// propeties / field / attribut => merupakan data yang bisa kita sisipkan di dalam object
    // namun sebelum bisa memasukan data di field 
        // kita harus mendeklarasikan data apa saja yang dimiliki object tersebut
    // membuat field sama seperti membuat var namun harus di awal dengan var
    class Person
    {
        var $name;
        var $address;
        var $country;
    }

// manioulasi field
    // menggunakan kata kunci -> setelah nama object diikuti nama fieldnya
    $person = new Person();
    $person->name = "aria";
    $person->address = "jakarta";
    $person->country = "indonesia";

    var_dump($person);

    echo PHP_EOL . "Name \t\t: {$person->name}" . PHP_EOL;
    echo "address \t: {$person->address}" . PHP_EOL;
    echo "country \t: {$person->country}" . PHP_EOL . PHP_EOL;

    // person kedua
    $malik = new Person();
    $malik->name = "malik";
    $malik->address = "depok";
    $malik->country = "indonesia";

    var_dump($malik);

// propeties type declaration => tentukan type dari propety declaration yang ditentukan
    // propties type declaration memilki fitur type jungling yang mengubah secara otomatis ke tipe data lain
    // tambahkan typedata setelah var

// default propeties value => jika object tidak di ubah maka dia akan mengambil default value
    // tambahkan "= value" setelah namavar
    // var typedata $variable = value;
    class User
    {
        var string $username = "ariafatah";
        var int $age = 10;
        var bool $menikah = true;
    }

    $aria = new User();

    // $aria->age = "tujuhbelas"; // error
    var_dump($aria);

// nullable propeties => mengirim data null ke propeties atau function atau argument
    // sebelum type declaration kita tambahkan ?
    // var ?typedata $variable = value;
        // => artinya type datanya boleh null
    class Car
    {
        // var string $mobil = null; // error
        var ?string $mobil = null; // bisa

        // var int $money = 100000; // error juga jika menull dari luar
        var ?int $money = 100000; // bisa
    }

    $aria_ganteng = new Car();
    $aria_ganteng->money = null; 

    var_dump($aria_ganteng);
    // beralku juga untuk function

