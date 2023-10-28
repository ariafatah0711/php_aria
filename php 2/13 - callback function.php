<?php
// callback function => merupakan sebuah mekanisme sebuah function memanggil function lainya
    // sesuai yang diberikan argument
    // namun di PHP ada cara lain untuk implementasi callback
        // yaitu menggunakan tipe data callable
    // dan untuk memanggil function tersebut
        // call_use_func(callable, argument)
        // atau gunakan saja $callable(argument)
    function sayHello(string $name, callable $filter) {

        $finalName = call_user_func($filter, $name);
        // $finalName = $filter($name); // sama aja

        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("aria", "strtoupper");
    sayHello("jessy", function (string $name): string {
        return strtoupper($name);
    });
    sayHello("malik", fn($name) => strtoupper($name));