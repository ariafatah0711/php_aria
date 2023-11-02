<?php
// object => adalah data yang berisi field / propeties / atribut / function / behavior
    // object adalah hasil instansiasi dari sebuah class
    // untuk membuat object kita dapat menggunakan kata kunci new,
        // dan diikuti dengan nama classnya dan ()
    require_once "data/Person.php";

    $person1 = new Person();
    $person2 = new Person();
    $person3 = new Person();

    var_dump($person1);