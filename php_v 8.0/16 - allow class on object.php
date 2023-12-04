<?php
// di php 7 untuk mendapatkan nama class sebuah object kita perlu menggunakan
    // NamaaClass::class atau get_class($object)

// allow ::class on object
    // di php 8 kita bisa langsung mengambil nama class dari $object::class secara langsung
    class Login
    {

    }

    $login = new Login();

    var_dump($login::class); // terbaru

    var_dump(get_class($login)); // lama
    var_dump(Login::class);