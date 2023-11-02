<?php
// this => untuk mengakses object saat ini(ingat bukan class tapi object)
    // misal kita saat mengakses propeties atau function lain di class yang sama
    // mengubah $namaclass jadi $this
    class Person
    {
        var string $name;
        var ?string $address = null;
        var ?string $country = null;

        function sayHello(?string $name) {
            if (is_null($name)) {
                echo "Hi My name is {$this->name}" . PHP_EOL;
            } else {
                echo "Hello $name My name is {$this->name}" . PHP_EOL;
            }
        }
    }

    $aria = new Person();
    $aria->name = "aria";

    $aria->sayHello(null);
    $aria->sayHello("malik");