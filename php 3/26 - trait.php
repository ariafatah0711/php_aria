<?php
// selain class dan interface php juga memiliki trait
// trait => mirip dengan abstrak class, kita bisa membuat konkrit function atau abstrak function
    // yang membedakan adalah, di trait kita bisa tambahkan ke dalam class lebih dari satu
    // trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
    // secara sederhana trait adalah digunakan untuk menyimpan function yang bisa digunakan di beberapa class
    // untuk menggunakan trait kita menggunakan kata kunci use
    namespace Data\Traits1;

    trait SayGoodBye
    {
        function goodBye(?string $name): void {
            if (is_null($name)) {
                echo "Good Bye" . PHP_EOL;
            } else {
                echo "Good Bye $name" . PHP_EOL;
            }
        }
    }

    trait SayHello
    {
        public function hello(?string $name) {
            if (is_null($name)) {
                echo "Hello" . PHP_EOL;
            } else {
                echo "Hello $name" . PHP_EOL;
            }
        }
    }

    // menggunakan trait
    use Data\Traits1\{SayHello, SayGoodBye};

    class Person
    {
        use SayGoodBye, SayHello; // jadi kaya extension dan bukan pewarisan
    }

    $person = new Person();
    $person->hello("aria");
    $person->goodBye("aria");

// trait propeties => di trait kita bisa menambahkan propeties
    // berbeda dengan interface yang hanya bisa abstrak function
    // dengan menambahkan propeties secara otomatis class tersebut akan memiliki propeties yang ada di trait

    namespace Data\Traits2;

    trait SayGoodBye
    {
        function goodBye(?string $name): void {
            if (is_null($name)) {
                echo "Good Bye" . PHP_EOL;
            } else {
                echo "Good Bye $name" . PHP_EOL;
            }
        }
    }

    trait SayHello
    {
        public function hello(?string $name) {
            if (is_null($name)) {
                echo "Hello" . PHP_EOL;
            } else {
                echo "Hello $name" . PHP_EOL;
            }
        }
    }

    trait HasName
    {
        public string $name;
    }

    // person
    use Data\Traits2\{SayGoodBye, SayHello, HasName};

    class Person
    {
        use SayGoodBye, sayHello, HasName;
    }

    $aria = new Person();
    $aria->name = "ariafatah";
    var_dump($aria);