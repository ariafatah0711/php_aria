<?php

class Person
{
    // var
    var $name;
    var $address;
    var $country;

    // function
    function sayHello(?string $name) {
        if (is_null($name)) {
            echo "Hi My name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name My name is {$this->name}" . PHP_EOL;
        }
    }
}