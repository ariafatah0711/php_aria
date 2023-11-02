<?php
// saat kita memanggil object maka kita seperti memanggil sebuah function
    // karena kita menggunakan kurung ()
// constructor => merupakan sebuah function yang akan di panggil saat pertama kali object dibuat
    // mirip seperti di function kita bisa memberikan paramter pada cnstructor
    // menggunakan __construc()
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

    $aria = new Person("aria", "jakarta");
    $malik = new Person("malik", "Depok");

    echo PHP_EOL;
    var_dump($aria);
    var_dump($malik);
    echo PHP_EOL;

    $aria->sayHello("malik");
    $malik->sayHello("aria");