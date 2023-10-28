<?php
// variable function => merupakan kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
    // untuk menggunakanya kita bisa secara langsung memanggil $nanaVariable(argument)

    function foo() {
        echo "FOO" . PHP_EOL;
    }

    function bar() {
        echo "BAR" . PHP_EOL;
    }

    // $functionName() = foo()
    $functionName = "foo";
    $functionName(); // foo() sama aja

    $functionName = "bar";
    $functionName(); // bar() sama aja
    echo "\n";

// menggunakan argument
    function sayHello(string $name, $filter) {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("aria", "strtoupper");
    SayHello("malik", "strtolower");


    function sampleName(string $name): string {
        return "sample $name";
    }
    function MrsName(string $name): string {
        return "Mrs.$name";
    }
    sayHello("aria fatah", "sampleName");
    sayHello("eko", "MrsName");