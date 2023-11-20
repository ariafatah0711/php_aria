<?php
// function overloading => saat mengakses function, maka secara otomatis function akan di akses
    // namun jika ternyata function tersebut tidak ada maka PHP tidak secara otomatis menjadikan itu error
    // PHP akan melakukan callback ke magic function
    // dengan demikian kita dapat membuat function secara dynamis
    
    /*
    __call($name, $arguments): mixed => di eksekusi ketika memanggil function yang tidak tersedia
    static __callStatic($name, $arguments): mixed => di eksekusi ketika memanggil static function yang tidak tersedia
    */

    class Zero
    {
        public function run() {
            echo "Running App" . PHP_EOL;
        }

        // function overloading
        public function __call($name, $arguments) {
            $join = join(",", $arguments);
            echo "Call function $name with arguments $join" . PHP_EOL;
        }

        // ininya harus static
            // static => merupakan function yang hanya di panggil lewat class
        static function __callStatic($name, $arguments) {
            $join = join(",", $arguments);
            echo "Call static function $name with arguments $join" . PHP_EOL;
        }
    }

    $zero = new Zero();
    $zero->run();

    $zero->sayHello("aria", "fatah");
    Zero::sayHello("malik", "anom");