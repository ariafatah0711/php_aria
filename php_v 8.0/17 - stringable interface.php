<?php
// stringable interface
    // jika kita melakukan overriding di magic function __toString.
        // maka secara otomatis class kita akan implement interface Stringable
    // kita tidak perlu melakukan secara manual karena ini sudah dilakukan secara otomatis

    function sayHello(Stringable $stringable) {
        echo "Hello {$stringable->__toString()}" . PHP_EOL;
    }

// overriding toString function
    class Person
    {
        public function __toString(): string {
            return "Person";
        }
    }

    sayHello(new Person());