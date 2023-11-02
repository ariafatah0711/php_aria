<?php

class Person
{
    // const
    const AUTHOR = "ariafatah";

    // var
    var string $name;
    var ?string $address = null;
    var ?string $country = "indonesia";

    // constructor
    public function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    // function
    function sayHello(?string $name) {
        if (is_null($name)) {
            echo "Hi My name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name My name is {$this->name}" . PHP_EOL;
        }
    }
}