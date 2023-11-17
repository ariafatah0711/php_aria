<?php
// anonymous class => merupakan class tanpa nama
    // kemampuan mendeklarasikan class segaligus meng-instansiasi object secara langsung
    // anonymous class sangat cocok ketika berhadapan dengan
        // kasus implementasi interface atau abstrak class

// tanpa anonymous function
    interface HelloWorld
    {
        function sayHello(): void;
    }

    class SampleHelloWorld implements HelloWorld
    {
        public function sayHello(): void {
            echo "Hello World" . PHP_EOL;
        }
    }
    $helloWorld = new SampleHelloWorld();
    $helloWorld->sayHello();

// jika menggunakan anonymous function
    interface HaloDunia
    {
        function sayDunia(): void;
    }

    // new class implements HaloDunia {}
    $haloDunia = new class implements HaloDunia {
        public function sayDunia(): void {
            echo "Hallo Dunia aku adalah anonymous function" . PHP_EOL;
        }
    };

    $haloDunia->sayDunia();

// constructor anonymous function => new class("argument", "argument")
    interface HaloBumi
    {
        function sayBumi(): void;
    }

    // new class implements HaloBumi {}
    $haloDunia = new class("aria") implements HaloBumi {
        public string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function sayBumi(): void {
            echo "Hallo Bumi aku adalah $this->name" . PHP_EOL;
        }
    };

    $haloDunia->sayBumi();