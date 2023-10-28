<?php
// arrow function => merupakan alternative anynonimous function yang sederhana
    // arrow function dapat menggunakan variable yang ada di luar
        // tidak perlu gunakan use $namavar
    // arrow function tidak menggunakan kata function
        // melainkan fn
    $firstName = "aria";
    $lastName = "fatah";

    // anoynomous function
    $anonymousFunction = function () use ($firstName, $lastName): string {
        return "Hello $firstName $lastName" . PHP_EOL;
    };
    echo $anonymousFunction();

    // arrow function
    $arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL; // tidak perlu gunakan use
    echo $arrowFunction(); // tanpa menggunakan return