<?php
// throw expression => 
    // throw adalah sebuah statement
    // hal ini menyebabkan kita kesulitan menggunakan throw di beberapa tempat
        // yang membutuhkan expression, seperti ternary operator misalnya
    // di php 8 adalah sebuah expression artinya dia memiliki nilai,
        // dan sekarang kita bisa gunakan di tempat-tempat yang memang
        // membutuhkan expression seperti ternary operator

// whithout throw expression
    function sayHello(?string $name) {
        if ($name == null) {
            throw new Exception("tidak boleh null");
        }

        echo "Hello $name" . PHP_EOL;
    }

    function sayHelloExpression(?string $name) {
        $result = $name != null ? "Hello $name" : throw new Exception("tidak boleh null");

        echo $result . PHP_EOL;
    }

    sayHello("aria");
    // sayHello(null);
    
    sayHelloExpression("aria");
    sayHelloExpression(null);

    // $name = "aria";
    // $result = $name == "aria" ? "sukses" : throw new Exception("Ups");

    // function validate(?string $name) {
    //     $result = $name ?? throw new Exception("null");
    //     echo "Hello $result" . PHP_EOL;
    // }

    // valdate("aria");
    // validate("aria ganteng");