<?php
// function => function di dalam object
    // bisa di return, paramter juga
    class Person
    {
        var string $name;
        var ?string $address = null;
        var ?string $country = null;

        function sayHello(string $name): string {
            echo "Hello $name" . PHP_EOL;
            return "$name ganteng";
        }
    }

    $person = new Person();
    $person->name = "aria";
    $person->address = "jakarta";
    $person->country = "indonesia";

    // memanggil function dan return value
    $person->sayHello("aria");
    $sayHello = $person->sayHello('aria');

    echo $sayHello;